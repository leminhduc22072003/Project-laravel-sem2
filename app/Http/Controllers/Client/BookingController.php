<?php

namespace App\Http\Controllers\Client;

use App\Models\Category;
use App\Models\ChiTietHoaDon;
use App\Models\Chuyenbay;
use App\Models\Customer;
use App\Models\Hoadon;
use App\Models\Order;
use App\Models\ThanhPho;
use App\Models\User;
use App\Models\Ve;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function getChuyenBay(Request $request) {
        $thanhphodi = ThanhPho::where('name', 'LIKE', '%'.$request->diemdi.'%')->first();
        $thanhphoden = ThanhPho::where('name', 'LIKE', '%'.$request->diemden.'%')->first();

        $chuyenbay = Chuyenbay::with('sanbay1.thanhpho', 'sanbay2.thanhpho', 'maybay.hangbay')
            ->where(function ($query) use ($request) {
            $query->whereHas('sanbay1', function ($q) use ($request){
                $q->where('tensanbay', 'LIKE', '%'.$request->diemdi.'%');
            });
            $query->orWhereHas('sanbay1.thanhpho', function ($q) use ($request){
                $q->where('name', 'LIKE', '%'.$request->diemdi.'%');
            });
            })->where(function ($query) use ($request) {
                $query->whereHas('sanbay2', function ($q) use ($request){
                    $q->where('tensanbay', 'LIKE', '%'.$request->diemden.'%');
                });
                $query->orWhereHas('sanbay2.thanhpho', function ($q) use ($request){
                    $q->where('name', 'LIKE', '%'.$request->diemden.'%');
                });
            })
            ->where('ngaydi', 'LIKE', '%'.$request->ngaydi.'%')
            ->get();
        return view('client.chuyenbay')->with(compact('chuyenbay', 'thanhphodi', 'thanhphoden'));
    }

    public function getPreBooking(Request $request) {
        $chuyenbay = Chuyenbay::with('sanbay1.thanhpho', 'sanbay2.thanhpho', 'maybay.hangbay')
            ->where('machuyenbay', 'LIKE', '%'.$request->get('chuyenbay').'%')
            ->first();
        return view('client.prebooking')->with(compact('chuyenbay'));
    }

    public function getBooking(Request $request) {
        $chuyenbay = Chuyenbay::with('sanbay1.thanhpho', 'sanbay2.thanhpho', 'maybay.hangbay')
            ->where('machuyenbay', 'LIKE', '%'.$request->get('chuyenbay').'%')
            ->first();
        return view('client.yourbooking2')->with(compact('chuyenbay'));
    }

    public function postBooking(Request $request) {
        $request ->validate([
            'first_name1' => 'required',
            'last_name1' => 'required',
            'sdt1' => 'required|numeric',
            'email1' => 'required|email',
        ],[
            'required'=>"Vui lòng nhập thông tin",
            'numeric'=>"Vui lòng nhập số",
            'email'=>"Vui lòng nhập email"
        ]);
        $request ->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'sdt' => 'required|numeric',
            'email' => 'required|email',
            'sinhnhat' => 'required',
            'quoctich' => 'required',
            'gioitinh' => 'required',
        ],[
            'required'=>"Vui lòng nhập thông tin",
            'numeric'=>"Vui lòng nhập số",
            'email'=>"Vui lòng nhập email"
        ]);
        $customer = Customer::where('email', 'LIKE', $request->get('email'))->first();
        if (empty($customer)) {
            $customer = Customer::create([
                "first_name"=>$request->get("first_name"),
                "last_name"=>$request->get("last_name"),
                "sdt"=>$request->get("sdt"),
                "email"=>$request->get("email"),
                "sinhnhat"=>$request->get("sinhnhat"),
                "quoctich"=>$request->get("quoctich"),
                "gioitinh"=>$request->get("gioitinh"),
            ]);
        }
        $user = User::where('email', 'LIKE', $request->get("email"))->first();
        $confirm = null;
        if (empty($user)) {
            $confirm = User::create([
                "name"=>$request->get("first_name1") . ' ' . $request->get("last_name1"),
                "password"=>Hash::make(12345678),
                "sdt"=>$request->get("sdt1"),
                "email"=>$request->get("email1"),
                'role' => GROUP_USER,
                'active' => ACTIVE_TRUE
            ]);
        }

        $chuyenbay = Chuyenbay::with('sanbay1.thanhpho', 'sanbay2.thanhpho', 'maybay.hangbay')
            ->where('machuyenbay', 'LIKE', '%'.$request->get('chuyenbay').'%')
            ->first();

        $request->session()->put('user', json_encode(!empty($user) ? $user : $confirm));
        $request->session()->put('chuyenbay', json_encode($chuyenbay));

        return view("client.bookingdetail")->with(compact('customer', 'confirm', 'chuyenbay'));
    }

    public function payment(Request $request) {
        $user = json_decode($request->session()->get('user'));
        $chuyenbay = json_decode($request->session()->get('chuyenbay'));
        $bill = Hoadon::create(
            [
                'user_id' => $user->id,
                'idchuyenbay' => $chuyenbay->id,
            ]
        );

        $chitiet = ChiTietHoaDon::create(
            [
                'bill_id' => $bill->id,
                'ngaydatve' => Carbon::now()->format('Y-m-d'),
                'trangthai' => 1,
                'tongtien' => $chuyenbay->giave,


            ]
        );

        $ve = Ve::create(
            [
                'user_id' => $user->id,
                'idhoadon' => $bill->id,
                'idchuyenbay' => $chuyenbay->id,
            ]
        );

        return view('client.payment', [
            'bill' => $bill,
            'user' => $user,
            'chuyenbay' => $chuyenbay
        ]);
    }

    public function finish(Request $request) {
        return view('client.payment');
    }
}

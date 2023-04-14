<?php

namespace App\Http\Controllers\Client;

use App\Models\Category;
use App\Models\ChiTietHoaDon;
use App\Models\Chuyenbay;
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

class UserController extends Controller
{
    public function getLogin() {
        return view('client.user.login');
    }

    public function login(Request $request)
    {
        $rules = [
            'email' => 'required',
            'password' => 'required',
        ];
        $messages = [
            'email.required' => 'Email không được để trống',
            'password.required' => 'Mật khẩu xác nhận không được để trống',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            // tra ve true neu validate bi loi
            return redirect()->back()->withErrors($validator)->withInput($request->input());
        } else {
            $user = User::where(['email' => $request->email])->first();
            if ($user && Hash::check($request->password, $user->password)) {
                if ($user->active == ACTIVE_TRUE) {
                    $request->session()->put('user', $user);
                    $request->session()->put('role', $user->role);
                    return redirect()->route('client.hoadon.list');
                } else {
                    $message = 'Tài khoản đã bị khóa';
                    return view('client.auth.login')->with(compact('message'));
                }
            } else {
                $message = 'Vui lòng kiểm tra lại tài khoản và mật khẩu';
                return view('client.auth.login')->with(compact('message'));
            }
        }
    }

    public function getRegister() {
        return view('client.auth.register');
    }

    public function register(Request $request) {
        $rules = [
            'name' => 'required',
            'sdt' => 'required|numeric',
            'email' => 'required|email',
        ];

        $messages = [
            'name.required' => 'Tên khách hàng không được để trống',
            'sdt.required' => 'Số điện thoại không được để trống',
            'sdt.numeric' => 'Số điện thoại phải là số',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email phải thuộc định dạng email@mail.com',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            // tra ve true neu validate bi loi
            return redirect()->back()->withErrors($validator)->withInput($request->input());
        } else {
            $userDetail = [
                'email' => $request->email,
                'name' => $request->name,
                'sdt' => $request->sdt,
                'password' => Hash::make($request->password),
                'group' => GROUP_USER,
                'active' => 1
            ];
            $checkUser = User::where('email', $request->email)->first();
            if (empty($checkUser)) {
                $user = User::create($userDetail);
            } else {
                $error = 'Tài khoản bị trùng';
                return redirect()->back()->with('error');
            }
            if (!empty($user)) {
                $request->session()->put('user', $user);
                $request->session()->put('role', GROUP_USER);
                return redirect()->route('client.hoadon.list');
            }
        }
    }

    public function logout(Request $request)
    {
        if($request->id)
        {
            User::where(['id'=>$request->id])->update(['auth_token'=>null]);
            $request->session()->flash('message', 'Tài khoản đã đăng xuất');
            $request->session()->forget('user');
            $request->session()->forget('role');
            return redirect('/');
        }
        else
        {
            $request->session()->flash('message', 'Tài khoản không tồn tại');
            $request->session()->forget('user');
            $request->session()->forget('role');
            return redirect('/');
        }
    }

    public function index(Request $request) {
        $user = $request->session()->get('user');
        $ve = Ve::with('user', 'chuyenbay.maybay', 'chuyenbay.sanbay1', 'chuyenbay.sanbay2', 'hoadon.chitiethoadon')
            ->where('user_id', $user->id)->get();
        return view('client.datve.list')->with(compact('ve'));
    }
//    public function createStep1() {
//        $thanhpho = ThanhPho::get();
//        return view('client.datve.step1')->with(compact('thanhpho'));
//    }

    public function createStep2(Request $request) {
        $request ->validate([
            'ngaydi' => 'required',
            'sanbaydi' => 'required',
            'sanbayden' => 'different:sanbaydi',
        ],[
            'required'=>"Vui lòng nhập thông tin",
            'different'=>"Nơi đến phải khác với nơi đi",
        ]);

        $chuyenbay = Chuyenbay::where('sanbaydi', $request->sanbaydi)
            ->where('sanbayden', $request->sanbayden)
            ->where('ngaydi', 'LIKE', '%'.$request->ngaydi.'%')
            ->get();
        return view('client.datve.step2')->with(compact('chuyenbay'));
    }

    public function store(Request $request) {
        $user = $request->session()->get('user');
        $hoadon = Hoadon::create([
            "user_id"=>$user->id,
            "idchuyenbay"=>$request->get("idchuyenbay"),
        ]);
        ChiTietHoaDon::create([
            "bill_id"=>$hoadon->id,
            "ngaydatve"=>Carbon::now()->format('Y/m/d H:i:s'),
            "trangthai"=>1,
            "loaive" =>$request->get('loaive'),
        ]);
        $ve = Ve::create([
            "user_id"=>$user->id,
            "idchuyenbay"=>$request->get("idchuyenbay"),
            "idhoadon"=>$hoadon->id,
        ]);
        return redirect()->route("client.hoadon.list")->with(compact('ve'));
    }
}

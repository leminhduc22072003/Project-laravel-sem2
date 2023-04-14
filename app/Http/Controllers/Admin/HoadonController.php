<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ChiTietHoaDon;
use App\Models\Chuyenbay;
use App\Models\Hoadon;
use App\Models\User;
use App\Models\Ve;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HoadonController extends Controller
{
    public function all(Request  $request){
        $users = User::all();
        $chuyenbay = Chuyenbay::all();
        $paraID = $request->get("idkh");
        $hoadon= Hoadon::with('user', 'chuyenbay', 'chitiethoadon', 'chuyenbay.sanbay1', 'chuyenbay.sanbay2')->ID($paraID)->simplePaginate(10);
        return view ("admin.hoadon.list-hoadon",[
            "hoadon"=>$hoadon,
            "users"=>$users,
            "chuyenbay"=>$chuyenbay
        ]);
    }
    public function create(){
        $users = User::all();
        $chuyenbay = Chuyenbay::select('id', 'machuyenbay')->get();
        return view("admin.hoadon.add-hoadon",[
            "users" =>$users,
            "chuyenbay"=>$chuyenbay
        ]);

    }

    public function store(Request  $request){
        $request ->validate([
            'user_id'=>'required|string',
            'idchuyenbay' => 'required',
            'ngaydatve' => 'required',
            'trangthai' => 'required',
            'loaive' => 'required',
        ],[
            'required'=>"Vui lòng nhập thông tin"
        ]);
        $hoadon = Hoadon::create([
            "user_id"=>$request->get("user_id"),
            "idchuyenbay"=>$request->get("idchuyenbay"),
        ]);
        $ve = Ve::where('idchuyenbay', '=', $request->idchuyenbay)
            ->where('loaive', '=', $request->loaive)->first();
        ChiTietHoaDon::create([
            "bill_id"=>$hoadon->id,
            "ngaydatve"=>Carbon::parse($request->get("ngaydatve"))->format('Y/m/d H:i:s'),
            "trangthai"=>$request->get("idchuyenbay"),
            "loaive" =>$request->get('loaive'),
            "tongtien"=>$ve->giave,
        ]);
        return redirect()->route("admin.hoadon.list");
    }
    public function edit($id){
        $hoadon = Hoadon::with('chitiethoadon')->find($id);
        $users = User::all();
        $chuyenbay = Chuyenbay::all();
        return view('admin.hoadon.edit-hoadon',[
            'hoadon'=> $hoadon,
            'chuyenbay' => $chuyenbay,
            'users' => $users
        ]);
    }
    public  function update(Request $request, $id){
        $request ->validate([
            'user_id'=>'required|string',
            'idchuyenbay' => 'required',
            'ngaydatve' => 'required',
            'trangthai' => 'required',
            'loaive' => 'required',
        ],[
            'required'=>"Vui lòng nhập thông tin"
        ]);
        $hoadon = Hoadon::find($id);
        $hoadon -> update([
            "user_id"=>$request->get("user_id"),
            "idchuyenbay"=>$request->get("idchuyenbay"),
        ]);
        $ve = Ve::where('idchuyenbay', '=', $request->idchuyenbay)
            ->where('loaive', '=', $request->loaive)->first();
        $chitiet = ChiTietHoaDon::where('bill_id', $id)->first();
        $chitiet->update([
            "ngaydatve"=>Carbon::parse($request->get("ngaydatve"))->format('Y/m/d H:i:s'),
            "trangthai"=>$request->get("idchuyenbay"),
            "loaive" =>$request->get('loaive'),
            "tongtien"=>$ve->giave,
        ]);
        return redirect()->route("admin.hoadon.list")->with("success","Cập nhật hóa đơn thành công");
    }
    public function delete($id){
        try {
            $hoadon = Hoadon::find($id);
            $hoadon->delete();
            return redirect()->route("admin.hoadon.list")->with("success","Xóa hóa đơn thành công");
        }catch (\Exception $e){
            return redirect()->back()->with("error","Không thể xóa");
        }



    }
}

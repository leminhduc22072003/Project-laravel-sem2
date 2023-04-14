<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sanbay;
use App\Models\ThanhPho;
use Illuminate\Http\Request;

class SanbayController extends Controller
{
    //
    public function all(Request  $request){
        $paratenthanhpho = $request->get("thanhpho");
        $sanbay = Sanbay::with('thanhpho')->searchByThanhpho($paratenthanhpho)->simplePaginate(10);
        return view ("admin.sanbay.list-sanbay",[
            "sanbay" => $sanbay
        ]);
    }
    public function create(){
        $thanhpho = ThanhPho::get();
        return view("admin.sanbay.add-sanbay", [
            'thanhpho' => $thanhpho
        ]);
    }
    public function store(Request $request){
        $request ->validate([
            'tensanbay' => 'required',
            'idthanhpho' => 'required',
        ],[
            'required'=>"Vui lòng nhập thông tin"
        ]);
        Sanbay::create([
            "tensanbay"=>$request->get("tensanbay"),
            "idthanhpho"=>$request->get("idthanhpho"),
        ]);
        return redirect()->route("admin.sanbay.list");

    }
    public function edit($idsanbay){
        $sanbay = Sanbay::find($idsanbay);
        $thanhpho = ThanhPho::get();
        return view('admin.sanbay.edit-sanbay',[
            'sanbay'=> $sanbay,
            'thanhpho'=>$thanhpho
        ]);
    }
    public function update(Request  $request,$idsanbay){
        $request ->validate([
            'tensanbay' => 'required',
            'idthanhpho' => 'required',
        ],[
            'required'=>"Vui lòng nhập thông tin"
        ]);
        $sanbay = Sanbay::find($idsanbay);
        $sanbay -> update([
            "tensanbay"=>$request->get("tensanbay"),
            "idthanhpho"=>$request->get("thanhpho"),
        ]);
        return redirect()->route("admin.sanbay.list")->with("success","Cập nhật sân bay thành công");
    }
    public function delete($idsanbay){
        try {
            $sanbay = Sanbay::find($idsanbay);
            $sanbay->delete();
            return redirect()->route("admin.sanbay.list")->with("success","Xóa hóa đơn thành công");
        }catch (\Exception $e){
            return redirect()->back()->with("error","Không thể xóa");
        }

    }
}

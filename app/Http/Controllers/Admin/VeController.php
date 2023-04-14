<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Chuyenbay;
use App\Models\Maybay;
use App\Models\Ve;
use Illuminate\Http\Request;

class VeController extends Controller
{
    //
    public function all(Request  $request){
        $ve = Ve::with('user', 'chuyenbay.maybay', 'chuyenbay.sanbay1', 'chuyenbay.sanbay2', 'hoadon.chitiethoadon')
            ->get();
        return view('admin.ve.list')->with(compact('ve'));
    }
    public function create(){
        $chuyenbay = Chuyenbay::select('id','machuyenbay')->get();
        return view("admin.ve.add-ve",
        [
            'chuyenbay' => $chuyenbay
        ]);
    }
    public function store(Request $request){
        $request ->validate([
            'idchuyenbay' => 'required',
            'loaive' => 'required',
            'giave' => 'numeric'
        ],[
            'required'=>"Vui lòng nhập thông tin",
        ]);
        Ve::create([
            "name"=>$request->get("name"),
            "idchuyenbay"=>$request->get("idchuyenbay"),
            "loaive"=>$request->get("loaive"),
            "giave"=>$request->get("giave"),
        ]);
        return redirect()->route('admin.ve.list')->with("success","Thêm mới Vé thành công");
    }
    public function edit($idve){
        $ve = Ve::find($idve);
        $chuyenbay = Chuyenbay::select('id', 'machuyenbay')->get();
        return view('admin.ve.edit-ve',[
            've'=> $ve,
            'chuyenbay' => $chuyenbay
        ]);
    }
    public function update(Request  $request,$idve){
        $ve = ve::find($idve);
        $request ->validate([
            'idchuyenbay' => 'required',
            'loaive' => 'required',
            'giave' => 'numeric'
        ],[
            'required'=>"Vui lòng nhập thông tin",
            'integer'=>"Vui lòng số"
        ]);
        $ve -> update([
            "idchuyenbay"=>$request->get("idchuyenbay"),
            "loaive"=>$request->get("loaive"),
            "giave"=>$request->get("giave"),
        ]);
        return redirect()->route("admin.ve.list")->with("success","Cập nhật vé thành công");
    }
    public function delete($idve){
        try {
            $ve = Ve::find($idve);
            $ve -> delete();
            return redirect()->route("admin.ve.list")->with("success","Xóa vé thành công");
        }catch (\Exception $e){
            return redirect()->back()->with("error","Không thể xóa");
        }

    }
}

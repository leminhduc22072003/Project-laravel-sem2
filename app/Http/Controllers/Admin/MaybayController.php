<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Hangbay;
use App\Models\Maybay;
use Illuminate\Http\Request;

class MaybayController extends Controller
{
    //
    public function all(Request  $request){
        $paratenmaybay= $request->get("tenmaybay");
        $maybay = Maybay::with('hangbay')->Tenmaybay($paratenmaybay)->simplePaginate(10);
        return view ("admin.maybay.list-maybay",[
            "maybay" => $maybay
        ]);
    }
    public function create(){
        $hangbay = Hangbay::select('id', 'name')->get();
        return view("admin.maybay.add-maybay", [
            'hangbay' => $hangbay
        ]);
    }
    public function store(Request $request){
        $request ->validate([
            'idhangbay' => 'required',
            'tenmaybay' => 'required',
        ],[
            'required'=>"Vui lòng nhập thông tin",
            'integer'=>"Vui lòng số"
        ]);
        Maybay::create([
            "idhangbay"=>$request->get("idhangbay"),
            "tenmaybay"=>$request->get("tenmaybay"),
        ]);
        return redirect()->route("admin.maybay.list");
    }
    public function edit($idmaybay){
        $maybay = Maybay::find($idmaybay);
        $hangbay = Hangbay::select('id', 'name')->get();
        return view('admin.maybay.edit-maybay',[
            'maybay'=> $maybay,
            'hangbay' => $hangbay
        ]);
    }
    public function update(Request  $request,$idmaybay){
        $maybay = Maybay::find($idmaybay);
        $request ->validate([
            'idhangbay' => 'required',
            'tenmaybay' => 'required',
        ],[
            'required'=>"Vui lòng nhập thông tin",
            'integer'=>"Vui lòng số"
        ]);
        $maybay -> update([
            "idhangbay"=>$request->get("idhangbay"),
            "tenmaybay"=>$request->get("tenmaybay"),

        ]);
        return redirect()->to("/maybay/list")->with("success","Cập nhật máy bay thành công");
    }
    public function delete($idmaybay){
        try {
            $maybay = Maybay::find($idmaybay);
            $maybay -> delete();
            return redirect()->to("/maybay/list")->with("success","Xóa hóa đơn thành công");
        }catch (\Exception $e){
            return redirect()->back()->with("error","Không thể xóa");
        }

    }
}

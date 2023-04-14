<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Maybay;
use App\Models\ThanhPho;
use Illuminate\Http\Request;

class ThanhphoController extends Controller
{
    //
    public function all(Request  $request){
        $name = $request->get("name");
        $thanhpho = ThanhPho::Name($name)->simplePaginate(10);
        return view ("admin.thanhpho.list-thanhpho",[
            "thanhpho" => $thanhpho
        ]);
    }
    public function create(){
        return view("admin.thanhpho.add-thanhpho");
    }
    public function store(Request $request){
        $request ->validate([
            'name' => 'required',
            'mathanhpho' => 'required',
        ],[
            'required'=>"Vui lòng nhập thông tin",
        ]);
        Thanhpho::create([
            "name"=>$request->get("name"),
            "mathanhpho"=>$request->get("mathanhpho"),
        ]);
        return redirect()->route('admin.thanhpho.list')->with("success","Thêm mới thành phố thành công");
    }
    public function edit($idthanhpho){
        $thanhpho = Thanhpho::find($idthanhpho);;
        return view('admin.thanhpho.edit-thanhpho',[
            'thanhpho'=> $thanhpho
        ]);
    }
    public function update(Request  $request,$idthanhpho){
        $thanhpho = thanhpho::find($idthanhpho);
        $request ->validate([
            'name' => 'required',
            'mathanhpho' => 'required',
        ],[
            'required'=>"Vui lòng nhập thông tin",
            'integer'=>"Vui lòng số"
        ]);
        $thanhpho -> update([
            "name"=>$request->get("name"),
            "mathanhpho"=>$request->get("mathanhpho"),
        ]);
        return redirect()->route("admin.thanhpho.list")->with("success","Cập nhật thành phố thành công");
    }
    public function delete($idthanhpho){
        try {
            $thanhpho = Thanhpho::find($idthanhpho);
            $thanhpho -> delete();
            return redirect()->route("admin.thanhpho.list")->with("success","Xóa thành phố thành công");
        }catch (\Exception $e){
            return redirect()->back()->with("error","Không thể xóa");
        }

    }
}

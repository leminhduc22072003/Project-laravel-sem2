<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hangbay;
use App\Models\Maybay;
use App\Models\Sanbay;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HangbayController extends Controller
{
    //
    public function all(Request $request){
        $hangbay = Hangbay::all();
        return view ("admin.hangbay.list",[
            "hangbay" => $hangbay,
        ]);
    }

    public function create(){
        return view("admin.hangbay.add");
    }
    public function store(Request $request){
        $request ->validate([
            'name' => 'required',
            'avt_url' => 'required',
        ],[
            'required'=>"Vui lòng nhập thông tin",
        ]);

        hangbay::create([
            "name" => $request->get("name"),
            "avt_url" => $request->get("avt_url"),
        ]);

        return redirect()->route("admin.hangbay.list");
    }
    public function edit($idhangbay){
        $hangbay = Hangbay::find($idhangbay);
        return view('admin.hangbay.edit',[
            'hangbay'=> $hangbay,
        ]);
    }
    public function update(Request  $request,$idhangbay){
        $request ->validate([
            'name' => 'required',
            'avt_url' => 'required',
        ],[
            'required'=>"Vui lòng nhập thông tin",
        ]);
        $hangbay = Hangbay::find($idhangbay);
        $hangbay -> update([
            "name" => $request->get("name"),
            "avt_url" => $request->get("avt_url"),

        ]);
        return redirect()->route("admin.hangbay.list")->with("success","Cập nhật hãng bay thành công");
    }
    public function delete($idhangbay){
        try {
            $hangbay = Hangbay::find($idhangbay);
            $hangbay -> delete();
            return redirect()->route("admin.hangbay.list")->with("success","Xóa hãng bay thành công");
        }catch (\Exception $e){
            return redirect()->back()->with("error","Không thể xóa");
        }

    }


}

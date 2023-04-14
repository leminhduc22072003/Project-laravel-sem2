<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chuyenbay;
use App\Models\Hangbay;
use App\Models\Maybay;
use App\Models\Sanbay;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChuyenbayController extends Controller
{
    //
    public function all(Request $request){
        $sanbay = Sanbay::all();
        $sanbaydi = $request->get('idsanbaydi');
        $sanbayden = $request->get('idsanbayden');
        $ngaydi = $request->get('ngaydi');
        $ngayden = $request->get('ngayden');
        $trangthai = $request->get('trangthai');
        $chuyenbay = Chuyenbay::Sanbaydi($sanbaydi)
            ->Sanbayden($sanbayden)
            ->Ngaydi($ngaydi)
            ->Ngayden($ngayden)
            ->Trangthai($trangthai)
            ->with("maybay")
            ->simplePaginate(10);

        return view ("admin.chuyenbay.list-chuyenbay",[
            "chuyenbay" => $chuyenbay,
            "sanbay" => $sanbay
        ]);
    }

    public function create(){
        $maybay = Maybay::all();
        $sanbay = Sanbay::all();
        return view("admin.chuyenbay.add-chuyenbay",[
            'maybay' => $maybay,
            'sanbay' => $sanbay
        ]);
    }
    public function store(Request $request){
        $request ->validate([
            'machuyenbay' => 'required',
            'idmaybay' => 'required',
            'sanbaydi' => 'required',
            'sanbayden' => 'different:sanbaydi',
        ],[
            'required'=>"Vui lòng nhập thông tin",
            'different'=>"Phải khác trường ở trên",
            'integer'=>"Phải là số",
        ]);
        $maybay = Maybay::with('hangbay')->find($request->get('idmaybay'));
        Chuyenbay::create([
            "machuyenbay" => $request->get("machuyenbay"),
            "idmaybay" => $request->get("idmaybay"),
            "idhangbay" => $maybay->hangbay->id,
            "ngaydi" => Carbon::parse($request->get("ngaydi"))->format('Y/m/d H:i:s'),
            "ngayden" => Carbon::parse($request->get("ngayden"))->format('Y/m/d H:i:s'),
            "trangthai" => $request->get("trangthai"),
            "quangduong" => $request->get("quangduong"),
            "giave" => $request->get("giave"),
            "sanbaydi" => $request->get("sanbaydi"),
            "sanbayden" => $request->get("sanbayden"),
        ]);

        return redirect()->route("admin.chuyenbay.list");
    }
    public function edit($idchuyenbay){
        $chuyenbay = Chuyenbay::find($idchuyenbay);
        $maybay = Maybay::all();
        $sanbay = Sanbay::all();
        return view('admin.chuyenbay.edit-chuyenbay',[
            'chuyenbay'=> $chuyenbay,
            'maybay' => $maybay,
            'sanbay' => $sanbay
        ]);
    }
    public function update(Request  $request,$idchuyenbay){
        $request ->validate([
            'machuyenbay' => 'required',
            'idmaybay' => 'required',
            'sanbaydi' => 'required',
            'sanbayden' => 'different:sanbaydi',
        ],[
            'required'=>"Vui lòng nhập thông tin",
            'different'=>"Phải khác trường ở trên",
            'integer'=>"Phải là số",
        ]);
        $chuyenbay = Chuyenbay::find($idchuyenbay);
        $chuyenbay -> update([
            "machuyenbay" => $request->get("machuyenbay"),
            "idmaybay" => $request->get("idmaybay"),
            "ngaydi" => Carbon::parse($request->get("ngaydi"))->format('Y/m/d H:i:s'),
            "ngayden" => Carbon::parse($request->get("ngayden"))->format('Y/m/d H:i:s'),
            "trangthai" => $request->get("trangthai"),
            "quangduong" => $request->get("quangduong"),
            "giave" => $request->get("giave"),
            "sanbaydi" => $request->get("sanbaydi"),
            "sanbayden" => $request->get("sanbayden"),

        ]);
        return redirect()->route("admin.chuyenbay.list")->with("success","Cập nhật chuyến bay thành công");
    }
    public function delete($idchuyenbay){
        try {
            $chuyenbay = Chuyenbay::find($idchuyenbay);
            $chuyenbay -> delete();
            return redirect()->route("admin.chuyenbay.list")->with("success","Xóa chuyển bay thành công");
        }catch (\Exception $e){
            return redirect()->back()->with("error","Không thể xóa");
        }

    }


}

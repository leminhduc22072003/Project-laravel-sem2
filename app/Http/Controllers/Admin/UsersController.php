<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function all(Request  $request){
        $paraName = $request->get("name");
        $users= User::Name($paraName)->simplePaginate(10);
        return view ("admin.users.list-users",[
            "users"=>$users,
        ]);
    }
    public function create(){
        $users = User::all();
        return view("admin.users.add-users",[
            "users"=>$users,
        ]);

    }

    public function store(Request  $request){
        $request ->validate([
            "name"=>'required|string',
            "email" => 'required',
            "password" => 'required',
            "avatar"=>'image|mimes:jpeg,png,jpg,gif',
            "sdt" => 'required',
            "diachi" => 'required',
            "dambay" => 'required',
        ],[
            'required'=>"Vui lòng nhập thông tin"
        ]);
        $avatar = null;
        if($request->hasFile("avatar")){
            $file = $request->file("avatar");
            $path = "upload/";
            $fileName = time().rand(0,9).$file->getClientOriginalName();
            $file->move($path,$fileName);
            $avatar = $path.$fileName;
        }
        User::create([
            "name"=>$request->get("name"),
            "email"=>$request->get("email"),
            "password"=>$request->get("password"),
            "avatar"=>$avatar,
            "sdt"=>$request->get("sdt"),
            "diachi"=>$request->get("diachi"),
            "dambay"=>$request->get("dambay"),
            "role" =>$request->get("role"),
            'active'=>$request->get("active"),
        ]);
        return redirect()->route('admin.user.list')->with("success","Thêm mới User thành công");
    }
    public function edit($id){
        $users = User::find($id);
        return view('admin.users.edit-users',[
            'users'=> $users
        ]);
    }
    public function update(Request $request,User $users ){
        $avatar = $users->avatar;
        if($request->hasFile("avatar")){
            $file = $request->file("avatar");
            $path = "upload/";
            $fileName = time().rand(0,9).$file->getClientOriginalName();
            $file->move($path,$fileName);
            $avatar = $path.$fileName;}
        $users -> update([
            "name"=>$request->get("name"),
            "email"=>$request->get("email"),
            "password"=>$request->get("password"),
            "sdt"=>$request->get("sdt"),
            "diachi"=>$request->get("diachi"),
            "dambay"=>$request->get("dambay"),
            "avatar"=>$avatar,
            "role" =>$request->get("role"),
            'active'=>$request->get("active"),
        ]);
        return redirect()->route('admin.user.list')->with("success","Cập nhật User thành công");
    }

    public function delete($id){
        try {
            $users = User::find($id);
            $users->delete();
            return redirect()->to("/users/list")->with("success","Xóa User thành công");
        }catch (\Exception $e){
            return redirect()->back()->with("error","Không thể xóa");
        }
    }
}

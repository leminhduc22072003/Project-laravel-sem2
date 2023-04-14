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

class MainController extends Controller
{
    public function main() {
        $thanhpho = ThanhPho::get();
        return view('client.main', [
            'thanhpho' => $thanhpho
        ]);
    }

    public function about() {
        return view('client.about');
    }

    public function camnangdulich() {
        return view('client.camnangdulich');
    }

    public function contact() {
        return view('client.contact');
    }

    public function diemdenyeuthich() {
        return view('client.diemdenyeuthich');
    }

    public function gioithieu() {
        return view('client.gioithieu');
    }

    public function hotro() {
        return view('client.hotro');
    }

    public function khuyenmai() {
        return view('client.khuyenmai');
    }
    public function khuyenmai2() {
        return view('client.khuyenmai2');
    }
    public function lienhe() {
        return view('client.lienhe');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\Controller;

class WebController extends Controller
{
    public function admin(){
        return view("admin");
    }
}

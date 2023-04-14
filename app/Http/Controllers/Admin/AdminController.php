<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class AdminController extends Controller
{
    public function index(Request $request) {
        return view('admin.users.list-users');
    }
}

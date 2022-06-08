<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelawanC extends Controller
{
    function index(){
        return view('admin.page.relawan');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListRelawanC extends Controller
{
    function index () {
        return view('admin.component.list-relawan');
    }
}

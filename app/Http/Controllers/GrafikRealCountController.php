<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrafikRealCountController extends Controller
{
    function index(){
        return view('admin.page.grafik-real-count');
    }
}
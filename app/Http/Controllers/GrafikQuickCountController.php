<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrafikQuickCountController extends Controller
{
    function index(){
        return view('admin.page.grafik-quick-count');
    }
}
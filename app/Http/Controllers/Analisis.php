<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Analisis extends Controller
{
    function index(){
        return view('admin.page.analisis');
    }
}

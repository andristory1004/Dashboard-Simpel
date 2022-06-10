<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengurusC extends Controller
{
    function index (){
        return view('admin.page.pengurus');
    }
}

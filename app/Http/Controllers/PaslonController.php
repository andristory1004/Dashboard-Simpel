<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaslonController extends Controller
{
    function index(){
        return view('admin.page.paslon');
    }
}
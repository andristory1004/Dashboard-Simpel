<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperatorController extends Controller
{
    function index(){
        return view('admin.page.operator');
    }
}
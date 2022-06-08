<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardC extends Controller
{
    function index(){
        return view('admin.dashboard');
    }
}

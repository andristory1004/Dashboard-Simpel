<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonitoringSaksiController extends Controller
{
    function index(){
        return view('admin.page.monitoring-saksi');
    }
}
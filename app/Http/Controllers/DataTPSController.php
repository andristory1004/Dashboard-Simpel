<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataTPSController extends Controller
{
    function index(){
        return view('admin.page.data-tps');
    }
}
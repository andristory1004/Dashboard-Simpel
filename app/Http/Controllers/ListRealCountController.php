<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListRealCountController extends Controller
{
    function index(){
        return view('admin.page.list-real-count');
    }
}
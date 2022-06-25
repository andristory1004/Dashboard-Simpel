<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListQuickCountController extends Controller
{
    function index (){
        return view('admin.page.list-quick-count');
    }
}
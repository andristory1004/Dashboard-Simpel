<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListSaksiController extends Controller
{
    function index(){
        return view('admin.page.list-saksi');
    }
}
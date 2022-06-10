<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListPengurusC extends Controller
{
    function index (){
        return view('admin.component.list-pengurus');
    }
}

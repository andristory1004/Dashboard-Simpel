<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    function index(){
        // Get semua data indoregion
        $provinces = Province::all();
        $regencies = Regency::all();
        $districts = District::all();
        $villages = Village::all();
        return view('admin.page.operator', compact('provinces', 'regencies', 'districts', 'villages'));
    }
}
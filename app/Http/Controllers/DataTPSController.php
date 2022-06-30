<?php

namespace App\Http\Controllers;


use App\Models\Regency;
use App\Models\Village;
use App\Models\data_tps;
use App\Models\District;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class DataTPSController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index(){

        // Get semua data indoregion
        $provinces = Province::all();

        // get all data di MySql
        $data = data_tps::all(); 
        
        return view('admin.page.data-tps', compact('provinces'), ['data'=>$data]);
    }


    // Get data daerah

    function getKabupaten(request $request){
        $id_provinsi = $request->id_provinsi;

        $kabupatens = Regency::where('province_id', $id_provinsi)->get();

        $option = "<option>Kabupaten/Kota</option>";
        foreach($kabupatens as $kabupaten){
            $option.="<option value='$kabupaten->name'>$kabupaten->name</option>";
        }
        echo $option;
    }

    function getKecamatan(request $request){
        $id_kabupaten = $request->id_kabupaten;

        $kecamatans = District::where('regency_id', $id_kabupaten)->get();

        $option = "<option>Kecamatan</option>";
        foreach($kecamatans as $kecamatan){
            $option.="<option value='$kecamatan->id'>$kecamatan->name</option>";
        }
        echo $option;
    }

    function getKelurahan(request $request){
        $id_kecamatan = $request->id_kecamatan;

        $kelurahans = Village::where('district_id', $id_kecamatan)->get();

        $option = "<option>Kelurahan</option>";
        foreach($kelurahans as $kelurahan){
            $option.="<option value='$kelurahan->id'>$kelurahan->name</option>";
        }
        echo $option;
    }

   
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message=[
            'required' => 'Tabel tidak boleh kosong..!',
        ];

        // Validasi Required
        $validasi=$request->validate([
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'jumlah_tps' => 'required',
        ],$message);

        // Validasi data boleh kosong
        $validasi['keterangan']="";
        data_tps::create($validasi);
        return redirect('tps')->with('success', 'Data berhasil di simpan..!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
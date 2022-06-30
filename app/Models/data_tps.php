<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_tps extends Model
{
    use HasFactory;

    // protected $table = '';
    // protected $primaryKey = '';
    protected $fillable=[
     'id', 'provinsi', 'kabupaten', 'kecamatan', 'kelurahan', 'jumlah_tps', 'keterangan'

    ];
}
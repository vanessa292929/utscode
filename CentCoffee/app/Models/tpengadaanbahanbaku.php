<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tpengadaanbahanbaku extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'kode_pengadaan_bahan_baku', 
        'subjek_pengadaan_bahan_baku', 
        'tanggal_pengadaan_bahan_baku', 
        'waktu_pengadaan_bahan_baku', 
        'status_pengadaan_bahan_baku', 
        'kode_prioritas', 
        'kode_pegawai'
    ];
}

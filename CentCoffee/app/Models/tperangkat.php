<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perangkat extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'kode_perangkat', 
        'kata_sandi_perangkat', 
        'nama_perangkat', 
        'jumlah_kursi_perangkat', 
        'status_perangkat'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prioritas extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'kode_prioritas', 
        'nama_prioritas'
    ];
}
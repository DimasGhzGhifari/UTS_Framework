<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama_donatur', 'email', 'nominal',
        'metode_pembayaran', 'tanggal_donasi', 'status'
    ];
}



    


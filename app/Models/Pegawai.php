<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'bagian';
    protected $fillable = [
        'id_pegawai',
        'username',
        'password',
        'nama_pegawai',
        'alamat_pegawai',
        'hp_pegawai',
        'id_bagian',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    protected $fillable = [
        'namaLengkap',
        'nim',
        'prodi',
        'semester',
        'pasword',
        'foto',
    ];

    public $timestamps = false;

}

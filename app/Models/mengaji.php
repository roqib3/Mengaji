<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mengaji extends Model
{
    use HasFactory;
    protected $fillable = [
        'rekaman',
        'juz',
        'surah',
        'ayat',
    ];

    public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilaisurvey1 extends Model
{
    use HasFactory;

    public $survey1 = [
        'Sudah',
        'Belum'
    ];

    public $survey2 = [
        '<6 Bulan',
        '6 Bulan - 1 Tahun',
        '1 Tahun - 2 Tahun',
        '>2 Tahun'
    ];

    public $survey3 =[
        'Sangat Baik',
        'Baik',
        'Sedang',
        'Buruk',
        'Sangat Buruk'
    ];

    public $survey4 = [
        'Pernah',
        'Belum'
    ];
}

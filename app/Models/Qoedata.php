<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qoedata extends Model
{
    use HasFactory;

    protected $fillable = [
        'longitude',
        'latitute',
        'wilayah',
        'kelurahan',
        'vqm',
        'ssim',
        'psnr'
    ];
}

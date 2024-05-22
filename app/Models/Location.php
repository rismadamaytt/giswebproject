<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'alamat',
        'longitude',
        'latitude',
        'metode',
        'kategori_id',
        'kategori',
        'wilayah_id',
        'wilayah',
        'jarak',
        'vqm',
        'ssim',
        'psnr',
        'pathloss',
        'link_budget',
        'field_strength',
        'cnr',
        'snr',
        'ber',
        'kesimpulan',
    ];
}

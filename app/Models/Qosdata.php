<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qosdata extends Model
{
    use HasFactory;

    protected $fillable = [
        'longitude',
        'latitute',
        'wilayah',
        'kelurahan',
        'pathloss',
        'link_budget',
        'field_strength',
        'cnr',
        'snr',
        'ber'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemancar extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'longitude',
        'latitute',
        'service',
        'height',
        'modullation',
        'gain',
        'frequency',
        'transmit_power'
    ];
}

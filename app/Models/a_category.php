<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class a_category extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama'
    ];
}

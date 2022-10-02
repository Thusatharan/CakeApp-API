<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bbot extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'object', 'bin_longitude', 'bin_latitude', 'bin_level', 'is_gas'
    ];
}

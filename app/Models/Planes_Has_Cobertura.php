<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planes_Has_Cobertura extends Model
{
    use HasFactory;

    protected $casts = [
        'id_plan' => 'string',
        'id_cobertura' => 'string'
    ];
}

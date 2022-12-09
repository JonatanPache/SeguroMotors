<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficios extends Model
{
    use HasFactory;

    protected $casts = [
        'id_beneficio' => 'string'
      ];
      protected $primaryKey = "id_beneficio";
}

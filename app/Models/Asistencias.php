<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencias extends Model
{
    use HasFactory;
    protected $casts = [
        'id_asistencia' => 'string'
      ];
      protected $primaryKey = "id_asistencia";
}

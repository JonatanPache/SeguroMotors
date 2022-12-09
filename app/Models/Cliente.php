<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'nombre',
        'apellido_pa',
        'apellido_ma',
        'telefono',
        'direccion',
        'fecha_nacimiento',
    ];

    protected $casts = [
        'id_user' => 'string'
      ];
      protected $primaryKey = "id_user";

}

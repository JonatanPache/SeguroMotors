<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUser extends Model
{

    protected $casts = [
        'id_tipo_user' => 'string'
      ];
      protected $primaryKey = "id_tipo_user";
}

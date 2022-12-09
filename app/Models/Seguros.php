<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seguros extends Model
{
    use HasFactory;

    protected $casts = [
        'id_seguro' => 'string'
      ];
      protected $primaryKey = "id_seguro";

    public function plan(){
        return $this->belongsTo(Plane::class);
    }
}

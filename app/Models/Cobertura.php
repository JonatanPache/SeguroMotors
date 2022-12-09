<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cobertura extends Model
{
  use HasFactory;



  public function planes()
  {
    return $this->belongsToMany(
      Plane::class,
      'planes__has__coberturaa',
      'id_cobertura',
      'id_plan'
    );
  }
}

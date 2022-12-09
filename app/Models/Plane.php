<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    public function coberturas()
    {
        return $this->belongsToMany(
            Cobertura::class,
            'planes__has__coberturas',
            'id_plan',
            'id_cobertura'
        );
    }

    public function seguro(){
        return $this->hasMany(Seguros::class);
    }
}

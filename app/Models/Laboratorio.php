<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    use HasFactory;
    protected $fillable = ["nombre","curso","piso","especialidad","estado"];

    public function personales (){
        return $this->hasMany(Personal::class);
    }

    public function horarios(){
        return $this->hasMany(Horario::class);
    }
}

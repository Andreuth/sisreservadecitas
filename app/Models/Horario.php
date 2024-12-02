<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $fillable = ["personal_id","laboratorio_id","dia","hora_inicio","hora_fin"];

    public function personal(){
        return $this->belongsTo(Personal::class);
    }
    public function laboratorio(){
        return $this->belongsTo(Laboratorio::class);
    }
}

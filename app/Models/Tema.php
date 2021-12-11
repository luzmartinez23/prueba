<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;
    protected $fillable = ['titulo_tema', 'descripcion', 'estado', 'materia_id', 'profesor_id'];
    public function materia(){
        return $this->belongsTo('App\Models\Materia');
    }
    public function pregunta(){
        return $this->hasMany('App\Models\Pregunta');
    }
    public function evaluacion(){
        return $this->hasMany('App\Models\Evaluacion');
    }
    public function detalle_evaluacion(){
        return $this->hasMany('App\Models\Detalle_evaluacion');
    }
    public function tema(){
        return $this->belongsTo('App\Models\Tema');
    }
}

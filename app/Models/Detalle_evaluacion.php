<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_evaluacion extends Model
{
    use HasFactory;
    public function Usuario(){
        return $this->belongsTo('App\Models\Usuario');
    }
    public function evaluacion(){
        return $this->hasMany('App\Models\Evaluacion');
    }
    public function tema(){
        return $this->belongsTo('App\Models\Tema');
    }
    public function pregunta(){
        return $this->belongsTo('App\Models\Pregunta');
    }
}
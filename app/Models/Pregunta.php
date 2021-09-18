<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;
    public function tema(){
        return $this->belongsTo('App\Models\Tema');
    }
    public function Detalle_evaluacion(){
        return $this->hasMany('App\Models\Detalle_evaluacion');
    }
}

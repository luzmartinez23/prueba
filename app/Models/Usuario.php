<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    public function rol(){
        return $this->belongTo('App\Models\Rol');
    }
    public function asistencia(){
        return $this->hasMany('App\Models\Asistencia');
    }
    public function evaluacion(){
        return $this->hasMany('App\Models\Evaluacion');
    }
    public function detalle_evaluacion(){
        return $this->hasMany('App\Models\Detalle_evaluacion');
    }
    
    public function tema(){
        return $this->hasMany('App\Models\Tema');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;
    public function usuario(){
        return $this->belongsTo('App\Models\Usuario');
    }
    public function detalle_evaluacion(){
        return $this->belongsTo('App\Models\Detalle_evaluacion');
    }
    public function tema(){
        return $this->belongsTo('App\Models\Tema');
    }
    
    
}

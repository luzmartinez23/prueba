<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    public function actividades(){
        return $this->hasMany('App\Models\Actividades');
    }
    public function tema(){
        return $this->hasMany('App\Models\Tema');
    }
    
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'descripcion', 'materia_id'];
    public function materia(){
        return $this->belongsTo('App\Models\Materia');
    }
}
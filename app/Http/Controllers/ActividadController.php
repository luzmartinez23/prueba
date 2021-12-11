<?php

namespace App\Http\Controllers;

use App\Models\Actividades;
use App\Models\Materia;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function index(){
        $actividades = Actividades::all();
        $materias = Materia::all();
        return view('actividades.index', compact('actividades', 'materias'));
    }
    public function create(){
        $actividades = Actividades::all();
        $materias = Materia::all();
        return view('actividades.create', compact('actividades', 'materias'));
    }
    public function store(Request $request){
        Actividades::create($request->all());
        return redirect()->route('actividades.index');
    }
    public function show($id){
        $actividades = Actividades::all();
        $materias = Materia::all();
        return view('actividades.show');
    }
    public function edit($id){
        $actividad = Actividades::find($id);
        $materias = Materia::all();
        return view('actividades.edit', compact('actividad', 'materias'));
    }
    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'titulo'=>'required',
            'descripcion'=>'required',
            'materia_id'=>'required',
        ]);
        Actividades::whereid($id)->update($validatedData);
        return redirect()->route('actividades.index');
    }
    public function destroy($id){
        Actividades::destroy($id);
        return redirect()->route('actividades.index');
    }
}
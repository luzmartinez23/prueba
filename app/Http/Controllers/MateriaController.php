<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index(){
        $materias = Materia::all();
        // dd($materias);
        return view('materias.index', compact('materias'));
    }
    public function create(){
        return view('materias.create');
    }
    public function store(Request $request){
        $materia = new Materia();
        $materia->nombre = $request->nombre;
        $materia->curso = $request->curso;
        $materia->grado = $request->grado;
        // return $materia;
        $materia->save();
        return redirect()->route('materias.index');
    }
    public function show($id){
    }
    public function edit($id){
        $materia = Materia::find($id);
        return view('materias.edit', compact('materia'));
    }
    public function update(Request $request, Materia $materia){
        // dd ($request->all());
        // Materia::whereid($id)->update($request->all());
        // $materia = Materia::all();
        // $materia = Materia::findOrFail($id);
        $materia->update($request->all());
        return redirect()->route('materias.index');
    }
    public function destroy(Materia $materia){
        $materia->delete();
        return redirect()->route('materias.index');
    }
}
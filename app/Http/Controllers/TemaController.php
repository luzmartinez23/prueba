<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Models\Rol;
use Illuminate\Http\Request;
use App\Models\Tema;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class TemaController extends Controller
{
    public function index(){
        $temas = Tema::all();
        $materias = Materia::all();
        // $profesores = Rol::where('id',2)->get();
        // return $profesores;
        // dd($Temas);
        return view('temas.index', compact('temas', 'materias'));
    }
    public function create(){
        $materias = Materia::all();
        return view('temas.create', compact('materias'));
    }
    public function store(Request $request){
        // $tema = new Tema();
        // $tema->nombre = $request->nombre;
        // $tema->curso = $request->curso;
        // $tema->grado = $request->grado;
        // return $Tema;
        // $tema->save();
        // dd($request->all());
        $request->validate([
            'titulo_tema' => 'required',
            'descripcion' => 'required',
            'estado' => 'required',
            'materia_id' => 'required'
        ],
        [
            'titulo_tema.required' => 'Titulo es obligatorio',
            'descripcion.required' => 'Descripcion es obligatorio',
            'estado.required' => 'Debe seleccionar el estado',
            'materia_id.required' => 'Por favor, seleccione una materia'
        ]);
        // dd($request->all());
        Tema::create($request->all());
        return redirect()->route('temas.index');
    }
    public function show($id){
    }
    public function edit($id){
        $tema = Tema::find($id);
        $materias = Materia::all();
        return view('temas.edit', compact('tema', 'materias'));
    }
    public function update(Request $request, Tema $tema){
        // dd ($request->all());
        // Tema::whereid($id)->update($request->all());
        // $Tema = Tema::all();
        // $Tema = Tema::findOrFail($id);
        $tema->update($request->all());
        return redirect()->route('temas.index');
    }
    public function destroy(Tema $tema){
        $tema->delete();
        return redirect()->route('temas.index');
    }
}

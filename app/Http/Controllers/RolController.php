<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function index(){
        $roles = Rol::all();
        // dd($rols);
        return view('roles.index', compact('roles'));
    }
    public function create(){
        return view('roles.create');
    }
    public function store(Request $request){
        // $rol = new Rol();
        // $rol->nombre = $request->nombre;
        // $rol->curso = $request->curso;
        // $rol->grado = $request->grado;
        // return $rol;
        // $rol->save();
        Rol::create($request->all());
        return redirect()->route('roles.index');
    }
    public function show($id){
    }
    public function edit($id){
        $rol = Rol::find($id);
        return view('roles.edit', compact('rol'));
    }
    public function update(Request $request, $id){
        // dd ($request->all());
        // Rol::whereid($id)->update($request->all());
        // $rol = Rol::all();
        // $rol = Rol::findOrFail($id);
        $rol = Rol::find($id);
        $rol->update($request->all());
        return redirect()->route('roles.index');
    }
    public function destroy($id){
        $rol = Rol::find($id);
        $rol->delete();
        return redirect()->route('roles.index');
    }
}

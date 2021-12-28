<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller{

    public function index(){
        $categorias = Categoria::paginate(5);
        return view('categorias.index', compact('categorias'));
    }

    public function listar(){
        $categorias = Categoria::all();
        return $categorias;
    }


    public function create(){
        return view('categorias.crear');
    }

    public function show($id){
        $categoria = Categoria::find($id);
        return view('categorias.show', compact('categoria'));
    }


    public function store(Request $request){
        $request->validate([
            'nom_categoria'=>'required'
        ]);
        Categoria::create($request->all());
        return redirect()->route('categorias.index')->with('msg','creo categoria');
    }



    public function edit($id){
        $categoria = Categoria::find($id);
        return view('categorias.editar', compact('categoria'));
    }


    public function update(Request $request, $id){
        $request->validate([
            'categoria'=>'required'
        ]);
        $categoria = Categoria::find($id);
        $categoria->nom_categoria = $request->input('categoria');
        $categoria->descript      = $request->input('descript');
        $categoria->save();
        return redirect()->route('categorias.index')->with('msg','actualizo categoría');
    }


    public function destroy($id){
        Categoria::find($id)->delete();
        return redirect()->route('categorias.index')->with('msg','elimino categoría');
    }
}

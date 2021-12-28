<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller{

    public function index(){
        $productos = Producto::paginate(5);
        return view('productos.index', compact('productos'));
      //  return $productos;
    }


}

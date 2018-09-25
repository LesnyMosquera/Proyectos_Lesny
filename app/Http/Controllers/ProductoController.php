<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    
    public function index()
    {
       $producto=Producto::orderBy('producto', 'ASC')->paginate(5);
        return view('productos.listarProducto')->with('producto',$producto);
    }

    public function create()
    {
       return view('productos.producto');
    }

    public function store(Request $request)
    {
        $producto=new Producto($request->all());
        $producto->producto=$request->producto;
        $producto->save();
        flash('El producto '.$request->producto.' ha sido creado Sastifactoriamente');
        return redirect()->route('producto.create');

    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}

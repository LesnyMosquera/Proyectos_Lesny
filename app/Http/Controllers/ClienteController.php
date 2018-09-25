<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Cliente;

class ClienteController extends Controller
{
    
    public function index()
    {
        
        $cliente = Cliente::orderBy('Nombre', 'ASC')->paginate(5);
        return view('clientes.listarCliente')->with('cliente',$cliente);
        
    }

    
    public function create()
    {
        return view('clientes.crearCliente');
    }

    public function store(Request $request)
    {

        $crearUsuario=new Cliente($request->all());
        $crearUsuario->Nit=$request->nit;
        $crearUsuario->Nombre=$request->nombre;
        $crearUsuario->Correo=$request->correo;
        $crearUsuario->Telefono=$request->telefono;
        $crearUsuario->Direccion=$request->direccion;
        $crearUsuario->Ciudad='Pereira';

         $crearUsuario->save();
        flash('El Usuario '.$request->nombre. ' fue creado sastifactoriamente');
        return redirect()->route('cliente.create');

        //otra forma de crear usuarios

        // $cliente=Cliente::create([

        //     'Nit'=> $request->get('nit'),
        //     'Nombre'=> $request->get('nombre'),
        //     'Correo'=> $request->get('correo'),
        //     'Telefono'=> $request->get('telefono'),
        //     'Direccion'=> $request->get('direccion'),
        //     'Ciudad'=> $request->get('ciudad'),

        // ]);

        // $cliente->save();
        // flash('El Usuario '.$request->nombre. ' fue creado sastifactoriamente');
        // return redirect()->route('cliente.create');

    }

    
    public function show($id)
    {
      
    }

    public function edit($id)
    {
     $dato=Cliente::find($id);
     return view('clientes.editarCliente', compact('dato'));
    }

  
    public function update(Request $request, $id)
    {
        $actualizarCliente=Cliente::find($id);
        $actualizarCliente->Nit=$request->nit;
        $actualizarCliente->Nombre=$request->nombre;
        $actualizarCliente->Correo=$request->correo;
        $actualizarCliente->Telefono=$request->telefono;
        $actualizarCliente->Ciudad=$request->ciudad;
       $actualizarCliente->save();
       return redirect()->route('cliente.index');
    }

    
    public function destroy($id)
    {
        $eliminarCliente=Cliente::find($id);
        // return ($eliminarCliente);
        
        $eliminarCliente->delete();
        return redirect()->route('cliente.index');


    }
}

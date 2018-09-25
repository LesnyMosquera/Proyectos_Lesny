<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfil;
use Laracasts\Flash\Flash;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $perfil=Perfil::orderby('Perfil', 'ASC')->paginate(5);
       return view('perfiles.listarPerfil')->with('perfil',$perfil);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('perfiles.perfil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $perfil=new Perfil($request->all());
      $perfil->Perfil=strtolower($request->perfil);
      $perfil->save();
       Flash::success('Perfil creado');
      return redirect()->route('perfil.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perfil=Perfil::find($id);
        return view('perfiles.editarPerfil', compact('perfil'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $this->validate($request,[
        //     'perfil'=>'required|unique:posts|max:255',
        // ]);

        $perfil=Perfil::find($id);
        $perfil->Perfil=$request->Perfil;
        $perfil->save();
      return redirect()->route('perfil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $perfil=Perfil::find($id);
      $perfil->delete();
      return redirect()->route('perfil.index');
    }
}

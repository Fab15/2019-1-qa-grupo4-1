<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;

class usuarioControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = usuario::all()->toArray();
        return view('usuario.inicio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.ingresoUsuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'usuario'=>'required',
            'correo'=> 'required',
            'password'=> 'required',
            'nombre'=> 'required',
            'fechaNacimiento'=> 'required',
        ]);
        $usuario = new usuario([
            'usuario'=>$request->get('usuario'),
            'correo'=>$request->get('correo'),
            'password'=>$request->get('password'),
            'nombre'=>$request->get('nombre'),
            'fechaNacimiento'=>$request->get('fechaNacimiento'),

        ]);
        $usuario->save();
        return redirect()->route('usuario.index')->with('success', 'Informacion agregada');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
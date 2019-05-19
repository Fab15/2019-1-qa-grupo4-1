<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\respuesta;

class respuestaControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $respuestas = respuesta::all()->toArray();
        return view('usuario.inicio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.inicio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session_start();
        $connect = mysqli_connect("localhost", "root", "", "redsocial");  
        $this->validate($request, [
            'texto2'=>'required',
            'tags3'=> 'required',
            'idComentario' => 'required'
        ]);
        $respuesta = new respuesta([
            'texto'=>$request->get('texto2'),
            'tags'=>$request->get('tags3'),
            'idUsuario'=> $_SESSION["id"],
            'idComentario'=> $request->get('idComentario'),
        ]);
        $respuesta->save();
        $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
        $query = "call guardarImagenR('$file')"; 
        if(mysqli_query($connect, $query))  
        {  
            echo '<script>alert("Información agregada")</script>';  
        }
        return redirect()->route('respuesta.index')->with('success', 'Informacion agregada');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\publicacion;
use DB;

class publicacionControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicaciones = publicacion::all()->toArray();
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
        $this->validate($request, [
            'titulo'=>'required',
            'descripcion'=> 'required',
            'tipo' => 'required',
            'tags'=> 'required'
        ]);
        $publicacion = new publicacion([
            'titulo'=>$request->get('titulo'),
            'descripcion'=>$request->get('descripcion'),
            'tags'=>$request->get('tags'),
            'tipo'=>$request->get('tipo'),
            'idUsuario'=>$_SESSION["id"]

        ]);
        $publicacion->save();
        return redirect()->route('publicacion.index')->with('success', 'Informacion agregada');
    }

    public function cargarPublicaciones(Request $request)
    {
        session_start();

        $publicaciones = DB::select('call procedimientoCargarPublicaciones(?)', [$_SESSION["id"]]);
        if(count($publicaciones) > 0)
        {

            for($i = 0; $i < count($publicaciones); $i++)
            {
                $idPublicacion = $publicaciones[$i]->id;
                $tituloPublicacion = $publicaciones[$i]->titulo;
                $descripcionPublicacion = $publicaciones[$i]->descripcion;
                $tagsPublicacion = $publicaciones[$i]->tags;
                $tipoPublicacion = $publicaciones[$i]->tipo;
                $idUsuarioPublicacion = $publicaciones[$i]->idUsuario;
                echo "Titulo<input type='text' value='$tituloPublicacion'/>" ;
                
            }
            //print_r($publicaciones);
           /*$_SESSION["id"] = $publicaciones[0]->id;
            $_SESSION["nombre"] = $comprobacion[0]->nombre;
            return redirect()->route('usuario.index');*/
        }
        else
        {
            echo "Sin publicaciones";

        }
        
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

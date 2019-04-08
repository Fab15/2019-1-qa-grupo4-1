<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\usuario;
use DB;
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
        return redirect()->route('usuario.inicio')->with('success', 'Informacion agregada');
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

    
    public function login(Request $request)
    {
        $this->validate($request, [
            'correo'    =>  'required',
            'password'     =>  'required'
        ]);

        $usuario = new usuario([
            'correo'=>$request->get('correo'),
            'password'=>$request->get('password'),
        ]);

        $comprobacion = DB::select('call procedimientoLogin(?,?)', [$usuario->correo,$usuario->password]);
        if(count($comprobacion) > 0)
        {
            session_start();
            $_SESSION["id"] = $comprobacion[0]->id;
            $_SESSION["nombre"] = $comprobacion[0]->nombre;
            return redirect('inicio.blade.php');
        }
        else
        {
            return redirect('logIn.blade.php');
        }
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
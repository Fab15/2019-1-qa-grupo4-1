
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        <link href="css/Botones.css" rel="stylesheet">
        <link href="css/Cuerpo.css" rel="stylesheet">
        <link href="css/Inputs/Inputs.css" rel="stylesheet">
        <link href="css/Inputs/normalizarInputs.css" rel="stylesheet">
        <link href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <title>App Social</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body onLoad=>
  

    @if(count($errors) > 0)
		<div class="alert alert-danger">
		<ul>
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
		</ul>
		</div>
		@endif
		@if(\Session::has('success'))
		<div class="alert alert-success">
		<p>{{ \Session::get('success') }}</p>
		</div>
		@endif
        
    <form method="get" action="{{url('usuario')}}">
        {{csrf_field()}}
            <div class="container">
            <section class="content">
                <img src='img/Logo.png' class="img-responsive" width="30%" height="30%">
                <br>
                <span class="input" id="inputLogin">
                    <input id="inputFieldLogin" class="inputField" type="text" name="correo" class="form-group" placeholder="Correo" />
                    <label class="inputLabel inputLabelNaranja" for="email">
                        <i class="fa fa-fw fa-envelope icono iconoInput"></i>
                        <span class="inputLabelContenido"></span>
                    </label>
                </span>
                <br>
                <span class="input" id="inputLogin">
                    <input class="inputField" type="password" name="password" class="form-group" placeholder="Contraseña" />
                    <label class="inputLabel inputLabelNaranja" for="contrasena">
                        <i class="fa fa-fw fa-lock icono iconoInput"></i>
                        <span class="inputLabelContenido"></span>
                    </label>
                </span>
                <br><br>
                <button  type="submit" class="boton botonRojo">Entrar</button>
                <br><br>
                <a href="registrar.blade.php">¿No tienes una cuenta aún? Regístrate aquí</a>
            </section>
        </div>
        </div>
    </form>
    </body>
</html>

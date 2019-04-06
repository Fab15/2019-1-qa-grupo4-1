<!DOCTYPE html>
<html lang="es-ES">
	<head>
		<meta charset="UTF-8" />
		<link rel="icon" href="img/Logo-Icono.ico" type="image/ico" sizes="16x16">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Usuarios</title>
	
		
		<!--Estilos -->
		<link rel="stylesheet" type="text/css" href="css/Cuerpo.css" />
		<link rel="stylesheet" type="text/css" href="css/Botones.css" />
		<link rel="stylesheet" type="text/css" href="css/Tabla.css" />
		<link rel="stylesheet" type="text/css" href="css/MainMenu/MainMenu.css" />
		<link rel="stylesheet" type="text/css" href="css/Inputs/Inputs.css" />
		<link rel="stylesheet" type="text/css" href="css/Inputs/normalizarInputs.css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		
		
		<!--Scripts -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script type="text/javascript" src="js/MainMenu/scriptMenu.js"></script>
		<script type="text/javascript" src="js/snap.svg-min.js"></script>
		<script type="text/javascript" src="js/componentesAdultosMayores.js"></script>
		
	</head>
	<body>
    <header>
        <div id="cssmenu">
            <ul>
               <li><a href="inicio.blade.php"><i class="fas fa-home elemento"></i>Inicio</a></li>
	           <li style="float:right;" ><a href="logIn.php"><i class="fas fa-sign-out-alt elemento"></i>Cerrar Sesión</a></li>
            </ul>    
        </div>           
    </header>

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
		<form method="post" action="{{url('usuario')}}">
   	{{csrf_field()}}
		
		<div class="container">
			<section class="content">
				<h2>Ingreso de Usuarios</h2>
				<h3>Información general:</h3>
				<hr>
				<span class="input" id="inputFormulario">
					<input class="inputField"  type="text" name="nombre" class="form-group" placeholder="Nombre" required/>
					<label class="inputLabel inputLabelNaranja"id="inputLabelDos" for="email">
						<i class="fa fa-fw fa-user icono iconoInput"></i>
						<span class="inputLabelContenido"></span>
					</label>
				</span>
				<br>
				<span class="input" id="inputFormulario">
					<input class="inputField" type="text" name="usuario" class="form-group" placeholder="Usuario" />
					<label class="inputLabel inputLabelNaranja" for="contrasena">
						<i class="fa fa-fw fa-key icono iconoInput"></i>
						<span class="inputLabelContenido"></span>
					</label>
				</span>
				<br>
				<span class="input" id="inputFormulario">
					<input class="inputField" type="password" name="password" class="form-group" placeholder="Contraseña" />
					<label class="inputLabel inputLabelNaranja" for="contrasena">
						<i class="fa fa-fw fa-lock icono iconoInput"></i>
						<span class="inputLabelContenido"></span>
					</label>
				</span>
				<br>
				<span class="input" id="inputFormulario">
					<input class="inputField" type="email" name="correo" class="form-group" placeholder="Correo" />
					<label class="inputLabel inputLabelNaranja" for="contrasena">
						<i class="fa fa-fw fa-envelope icono iconoInput"></i>
						<span class="inputLabelContenido"></span>
					</label>
				</span>
				<br>
				<span class="input" id="inputFormulario">
					<input class="inputField" type="text" name="fechaNacimiento" class="form-group" placeholder="Fecha de nacimiento" onfocus="(this.type='date')" onblur="(this.type='text')"/>
					<label class="inputLabel inputLabelNaranja" for="contrasena">
						<i class="fa fa-fw fa-birthday-cake icono iconoInput"></i>
						<span class="inputLabelContenido"></span>
					</label>
				</span>
				<br>
				<div class="form-group">
    			<input type="submit" class="boton botonRojo" text="Registrar" />
   			</div>
			</section>
		</div>
		</form>
		<div class="footer">
		  <img class="imgFooter" src="../../img/Logo-Blanco.png" align="left" class="img-responsive">
		  <p>© ComunicaTEC. Todos los derechos reservados.</p>
		</div>
	</body>
</html>
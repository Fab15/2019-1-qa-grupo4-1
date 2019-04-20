
 <!DOCTYPE html>  
 <html>  
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
 

                <form method="POST" enctype="multipart/form-data" action="{{action('usuarioControlador@guardarImagen')}}">
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
				<input type="file" name="image" id="image" />  
				<br>
				<div class="form-group">
    			<input type="submit" class="boton botonRojo" name="insert" id="insert" text="Registrar" />
   			</div>
			</section>
		</div>
		</form>
 </html>  

 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script> 
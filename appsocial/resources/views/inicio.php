<!DOCTYPE html>
<html lang="es-ES">
	<head>
		<meta charset="UTF-8" />
		<link rel="icon" href="../../img/Logo-Icono.ico" type="image/ico" sizes="16x16">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ComunicaTEC</title>
	
		
		<!--Estilos -->
		<link rel="stylesheet" type="text/css" href="css/Cuerpo.css" />
		<link rel="stylesheet" type="text/css" href="css/Botones.css" />
		<link rel="stylesheet" type="text/css" href="css/comentarios.css" />
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
               <li><a href="inicio.php"><i class="fas fa-home elemento"></i>Inicio</a></li>
	           <li style="float:right;" ><a href="logIn.php"><i class="fas fa-sign-out-alt elemento"></i>Cerrar Sesión</a></li>
            </ul>    
        </div>           
    </header>
	<div class="comments-container">
		<h2>Posts</h2>

		<ul id="comments-list" class="comments-list">
			<li>
				<div class="comment-main-level">
					<!-- Contenedor del Comentario -->
					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name">Fabiola Montero</h6>
							<i class="fa fa-reply"></i>
							<i class="fa fa-heart"></i>
						</div>
						<div class="comment-content">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
						</div>
					</div>
				</div>
				<!-- Respuestas de los comentarios -->
				<ul class="comments-list reply-list">
					<li>
						<!-- Contenedor del Comentario -->
						<div class="comment-box">
							<div class="comment-head">
								<h6 class="comment-name">Brandon Rojas</h6>
							</div>
							<div class="comment-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
							</div>
						</div>
					</li>

					<li>
			
						<!-- Contenedor del Comentario -->
						<div class="comment-box">
							<div class="comment-head">
								<h6 class="comment-name">Fabiola Montero</h6>
							</div>
							<div class="comment-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
							</div>
						</div>
					</li>
				</ul>
			</li>

			<li>
				<div class="comment-main-level">
					<!-- Contenedor del Comentario -->
					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name">Brandon Rojas</h6>
							<i class="fa fa-comment-alt"></i>
							<i class="fa fa-heart icono"></i>
						</div>
						<div class="comment-content">
							Prueba de comentario xd
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
		<div class="footer">
		  <img class="imgFooter" src="../../img/Logo-Blanco.png" align="left" class="img-responsive">
		  <p>© ComunicaTEC. Todos los derechos reservados.</p>
		</div>
	</body>
</html>

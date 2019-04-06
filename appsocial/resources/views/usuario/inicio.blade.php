<!DOCTYPE html>
<html lang="es-ES">
	<head>
		<meta charset="UTF-8" />
		<link rel="icon" href="img/Logo-Icono.ico" type="image/ico" sizes="16x16">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ComunicaTEC</title>
	
		
		<!--Estilos -->
		<link rel="stylesheet" type="text/css" href="css/Cuerpo.css" />
		<link rel="stylesheet" type="text/css" href="css/Modal.css" />
		<link rel="stylesheet" type="text/css" href="css/Tabla.css" />
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
		<script type="text/javascript" src="js/modals.js"></script>
		
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
    <div class="container">
    	<br><br>
    	<p>Para buscar debe ingresar los tags antecedidos por # y separados por espacio en caso de ser varios:</p>
							<section class="content">
							<span class="input">
								<input class="inputField" type="text" id="tituloPost" placeholder="Buscar" />
								<label class="inputLabel inputLabelNaranja" for="tituloPost">
									<i class="fa fa-fw fa-search  icono iconoInput"></i>
									<span class="inputLabelContenido"></span>
								</label>
							</span>
						</section>
		</div>
	<div class="comments-container">

		<ul id="comments-list" class="comments-list">
			<li>
				<div class="comment-main-level">
					<!-- Contenedor del Comentario -->
					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name">Fabiola Montero</h6>
							<i class="fa fa-lock-open" id="iconoPrivado" onclick="postPrivado()"></i>
							<i class="fa fa-lock" id="iconoPublico" onclick="postPublico()"></i>
						</div>
						<div class="comment-content">
							<div class="container">
							<section class="content">
							<span class="input">
								<input class="inputField" type="text" id="tituloPost" placeholder="Título" />
								<label class="inputLabel inputLabelNaranja" for="tituloPost">
									<i class="fa fa-fw fa-quote-left  icono iconoInput"></i>
									<span class="inputLabelContenido"></span>
								</label>
							</span>
							<span class="input">
								<input class="inputField" type="text" id="descripcionPost" placeholder="Descripción" />
								<label class="inputLabel inputLabelNaranja" for="descripcionPost">
									<i class="fa fa-fw fa-align-justify  icono iconoInput"></i>
									<span class="inputLabelContenido"></span>
								</label>
							</span>
							<span class="input">
								<input class="inputField" type="text" id="tagsPost" placeholder="Tags" />
								<label class="inputLabel inputLabelNaranja" for="tagsPost">
									<i class="fa fa-fw fa-tags icono iconoInput"></i>
									<span class="inputLabelContenido"></span>
								</label>
							</span>
							</section>
							<button onclick="" class="boton botonRojo">Publicar</button>
							</div>
						</div>
					</div>
				</div>
			</li>

			<li>
				<div class="comment-main-level">
					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name">Brandon Rojas</h6>
							<i class="fa fa-comment-alt" onclick="mostrarModalComentario()"></i>
							<i id="iconoLike" class="fa fa-heart" onclick="darLike()"></i>
							<i id="iconoVerLikes" class="fa fa-eye" onclick="mostrarModalLikes()"></i>
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
		</ul>
	</div>
	<div class="container">
	<section class="content">
	<!-- Modal -->
	<div id="modalComentario" class="modal">
		  <!--Contenido modal -->
		  <div class="modal-content">
		    <span class="close closeModalComentario">&times;</span>
		    <h4>Comentario:</h4>
		    <span class="input" >
					<textarea  rows="3" cols="5" class="inputField" id="comentario" placeholder="Escribe aquí tu comentario..."></textarea>
					<label class="inputLabel inputLabelNaranja" for="contrasena" id="inputLabelDos">
						<i class="fa fa-fw fa-align-justify icono iconoInput"></i>
						<span class="inputLabelContenido"></span>
					</label>
			</span>
			<br>
			<span class="input">
					<input class="inputField" type="text" id="tagsPost" placeholder="Tags" />
					<label class="inputLabel inputLabelNaranja" for="tagsPost">
					<i class="fa fa-fw fa-tags icono iconoInput"></i>
					<span class="inputLabelContenido"></span>
					</label>
			</span>
			<br>
			<button onclick="" class="boton botonRojo">Agregar</button>
		  </div>
	</div>
	<!-- Modal -->
	<div id="modalLikes" class="modal">
		  <!--Contenido modal -->
		  <div class="modal-content">
		    <span class="close closeModalLikes">&times;</span>
		    <h4>Usuarios que han dado like:</h4>
			<br>
		  </div>
	</div>
</section>
</div>

		<div class="footer">
		  <img class="imgFooter" src="../../img/Logo-Blanco.png" align="left" class="img-responsive">
		  <p>© ComunicaTEC. Todos los derechos reservados.</p>
		</div>
	</body>
</html>

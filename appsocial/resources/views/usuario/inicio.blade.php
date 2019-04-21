<?php 
 $connect = mysqli_connect("localhost", "root", "", "redsocial");

	session_start();
	if($_SESSION["nombre"] == "")
	{
		header("Location: /logIn.blade.php");
		die();
	}

	
?>

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
               <li><a href="inicio.blade.php"><i class="fas fa-home elemento"></i>Inicio</a></li>
	           <li style="float:right;"><a href="logIn.blade.php"><i class="fas fa-sign-out-alt elemento"></i>Cerrar Sesión</a></li>
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
	<form method="post" enctype="multipart/form-data" action="{{url('publicacion')}}">
  	{{csrf_field()}}
		<div class="comments-container">
			<ul id="comments-list" class="comments-list">
			<li>
			<div class="comment-main-level">
				<!-- Contenedor del Comentario -->
				<div class="comment-box">
					<div class="comment-head">
						<h6 class="comment-name"> <?php echo $_SESSION["nombre"];?> </h6> 
						<i class="fa fa-lock-open" id="iconoPrivado" onclick="postPrivado()"></i>
						<i class="fa fa-lock" id="iconoPublico" onclick="postPublico()"></i>
						<input type="hidden" class="inputField"  id="idPublicacion2" name="idPublicacion2" class="form-group" placeholder="idPublicacion" />
						<input type="hidden" class="inputField"  id="tipoPublicacion" name="tipo" class="form-group" placeholder="Tipo" />
					</div>
				<div class="comment-content">
				<div class="container">
						<section class="content">
						<span class="input">
								<input class="inputField" type="text" name="titulo" class="form-group"placeholder="Título" />
								<label class="inputLabel inputLabelNaranja" for="tituloPost">
									<i class="fa fa-fw fa-quote-left  icono iconoInput"></i>
									<span class="inputLabelContenido"></span>
								</label>
							</span>
							<span class="input">
								<input class="inputField" type="text" name="descripcion" class="form-group" placeholder="Descripción" />
								<label class="inputLabel inputLabelNaranja" for="descripcionPost">
									<i class="fa fa-fw fa-align-justify  icono iconoInput"></i>
									<span class="inputLabelContenido"></span>
								</label>
							</span>
							<span class="input">
								<input class="inputField" type="text" name="tags" class="form-group" placeholder="Tags" />
								<label class="inputLabel inputLabelNaranja" for="tagsPost">
									<i class="fa fa-fw fa-tags icono iconoInput"></i>
									<span class="inputLabelContenido"></span>
								</label>
							</span>
							<br>
							<input type="file" name="image" id="image" />  
							</section>
							<button onclick="" class="boton botonRojo">Publicar</button>
							</div>
						</div>
					</div>
				</div>
			</li>

			<li>

			<form method="post" action="{{url('like')}}">
			{{csrf_field()}}
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
			</form>
			<?php
							$idUsuario = $_SESSION["id"];
						  $connect = mysqli_connect("localhost", "root", "", "redsocial");  
							$query = "call procedimientoCargarPublicaciones('$idUsuario')"; 
							$result = mysqli_query($connect, $query);
							if (!$result) {
								echo 'sin publicaciones';
							}
							else
							{
								while($row = mysqli_fetch_array($result))  
								{  
										echo '
										<form>
												<div class="comment-main-level">
														<div class="comment-box">
																<div class="comment-head">
																		<h6 class="comment-name">'.$row['titulo'].'</h6>
																		<i class="fa fa-comment-alt" onclick="mostrarModalComentario('.$row['id'].')"></i>
																		<i id="iconoLike'.$row['id'].'" class="fa fa-heart" onclick="darLike('.$row['id'].')"></i>
																		<i id="iconoVerLikes" class="fa fa-eye" onclick="mostrarModalLikes()"></i>
																</div>
																<div class="comment-content">'.$row['descripcion'].'</div>
																<div class="comment-content">'.$row['tags'].'</div>
																<div align="center"> 
																<img src="data:image/jpeg;base64,'.base64_encode($row['imagen']).'" height="200" width="200" class="img-thumnail" />  
																</div>
														</div>
												</div>
										</form>';
										$idCargar = $row['id'];
										$connect = mysqli_connect("localhost", "root", "", "redsocial");  
										$query2 = "SELECT usuarios.nombre as usuario, comentarios.id as idComentario, comentarios.texto as texto, 
										comentarios.tags as tags, comentarios.imagen as imagen FROM comentarios inner join usuarios on 
										comentarios.idUsuario = usuarios.id WHERE comentarios.idPublicacion = '$idCargar'"; 
										$result2 = mysqli_query($connect, $query2);
										if (!$result2) {
											echo 'sin publicaciones';
										}
										else
										{
											while($row2 = mysqli_fetch_array($result2))  
											{
												echo '
												<ul class="comments-list reply-list">
												<li>
													<!-- Contenedor del Comentario -->
													<div class="comment-box">
														<div class="comment-head">
															<h6 class="comment-name">'.$row2['usuario'].'</h6>
															<i class="fa fa-comment-alt" onclick="mostrarModalComentario2('.$row2['idComentario'].')"></i>
														</div>
														<div class="comment-content">'.$row2['texto'].'</div>
														<div class="comment-content">'.$row2['tags'].'</div>
														<div align="center"> 
																<img src="data:image/jpeg;base64,'.base64_encode($row2['imagen']).'" height="200" width="200" class="img-thumnail" />  
																</div>
													</div>
												</li>
									</ul>
												';

												$idCargar2 = $row2['idComentario'];
												$connect = mysqli_connect("localhost", "root", "", "redsocial");  
												$query3 = "SELECT usuarios.nombre as usuario, respuestas.id as idRespuesta, respuestas.texto as texto, 
												respuestas.tags as tags, respuestas.imagen as imagen FROM respuestas inner join usuarios on 
												respuestas.idUsuario = usuarios.id WHERE respuestas.idComentario = '$idCargar2'"; 
												$result3 = mysqli_query($connect, $query3);
												if (!$result3) {
													echo 'sin publicaciones';
												}
												else
												{
													while($row3 = mysqli_fetch_array($result3))  
													{
														echo '
														<ul class="comments-list reply-list" align="center">
														<li>
															<!-- Contenedor del Comentario -->
															<div class="comment-box">
																<div class="comment-head">
																	<h6 class="comment-name">'.$row3['usuario'].'</h6>
																</div>
																<div class="comment-content">'.$row3['texto'].'</div>
																<div class="comment-content">'.$row3['tags'].'</div>
																<div align="center"> 
																		<img src="data:image/jpeg;base64,'.base64_encode($row3['imagen']).'" height="100" width="100" class="img-thumnail" />  
																		</div>
															</div>
														</li>
											</ul>
														';
											}
										}

										}
									}
							}
							}
				?>

				<?php
						  											
					?>

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
	</form>


	<form method="post"  enctype="multipart/form-data" action="{{url('comentario')}}">
  {{csrf_field()}}
	<div class="container">
	<section class="content">
	<!-- Modal -->
	<div id="modalComentario" class="modal">
		  <!--Contenido modal -->
		  <div class="modal-content">
		    <span class="close closeModalComentario">&times;</span>
		    <h4>Comentario:</h4>
		    <span class="input" >
				<input type="hidden" class="inputField"  id="idPublicacion" name="idPublicacion" class="form-group" placeholder="idPublicacion" />
					<textarea  rows="3" cols="5" class="inputField" name="texto" class="form-group" placeholder="Escribe aquí tu comentario..."></textarea>
					<label class="inputLabel inputLabelNaranja" for="contrasena" id="inputLabelDos">
						<i class="fa fa-fw fa-align-justify icono iconoInput"></i>
						<span class="inputLabelContenido"></span>
					</label>
			</span>
			<br>
			<span class="input">
					<input class="inputField" type="text" name="tags2" class="form-group" placeholder="Tags" />
					<label class="inputLabel inputLabelNaranja" for="tagsPost">
					<i class="fa fa-fw fa-tags icono iconoInput"></i>
					<span class="inputLabelContenido"></span>
					</label>
			</span>
			<br>
			<input type="file" name="image" id="image" />  
			<br>
			<button onclick="" class="boton botonRojo">Agregar</button>
		  </div>
	</div>
</form>

<form method="post"  enctype="multipart/form-data" action="{{url('respuesta')}}">
  {{csrf_field()}}
	<div class="container">
	<section class="content">
	<div id="modalComentario2" class="modal">
		  <!--Contenido modal -->
		  <div class="modal-content">
		    <span class="close closeModalComentario2">&times;</span>
		    <h4>Respuesta:</h4>
		    <span class="input" >
				<input  class="inputField"  id="idComentario" name="idComentario" class="form-group" placeholder="idComentario" />
					<textarea  rows="3" cols="5" class="inputField" name="texto2" class="form-group" placeholder="Escribe aquí tu comentario..."></textarea>
					<label class="inputLabel inputLabelNaranja" for="contrasena" id="inputLabelDos">
						<i class="fa fa-fw fa-align-justify icono iconoInput"></i>
						<span class="inputLabelContenido"></span>
					</label>
			</span>
			<br>
			<span class="input">
					<input class="inputField" type="text" name="tags3" class="form-group" placeholder="Tags" />
					<label class="inputLabel inputLabelNaranja" for="tagsPost">
					<i class="fa fa-fw fa-tags icono iconoInput"></i>
					<span class="inputLabelContenido"></span>
					</label>
			</span>
			<br>
			<input type="file" name="image" id="image" />  
			<br>
			<button onclick="" class="boton botonRojo">Agregar</button>
		  </div>
	</div>
	</form>


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

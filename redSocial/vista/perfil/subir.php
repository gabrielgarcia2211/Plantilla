<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	<title>Mi Increíble Galería en PHP</title>
	<link rel="stylesheet" href="<?php echo constant('URL')?>public/css/estilosbeta.css">
</head>
<body>
<header>
		<div class="contenedor">
			<h1 class="titulo">Subir Foto</h1>
		</div>
	</header>

	<div class="contenedor">
		<form class="formulario" id="formulario" action="" method="" enctype="multipart/form-data">
			
			<label for="foto">Seleciona tu foto</label>
			<input type="file" name="foto" id="foto" onchange="fileValidation(foto)">

			<!-- Image preview aca se carga la imagen que se va a subir  -->
			<div id="imagePreview">dd</div>

			<label for="titulo">Titulo de la foto</label>
			<input type="text" name="titulo" id="titulo">

			<label for="texto">Descripcion:</label>
			<textarea name="texto"  id="texto" placeholder="Ingresa una descripcion de la imagen"></textarea>

			<input class="submit" type="submit" value="Subir Foto">

		</form>
	</div>

	<footer>
		<p class="copyright">Galeria <?php echo strtoupper($_SESSION['user']); ?></p>
	</footer>
</body>
<script src="<?php echo constant('URL')?>public/js/perfil.js"></script>
</html>
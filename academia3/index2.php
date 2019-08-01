<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Proyecto Academias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->
<?php

include("include/menu.php");

?>
<!-- ======================================================================================================================== -->

<div id="myCarousel" class="carousel slide homCar">
		<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:1px solid #222; border-radius:4px;">
		  <div class="item active">
			<img src="images/pascomputacion.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Comptación Básica</h4>
				  <p>
				   recuerde que en esta disciplina la práctica es la que da el dominio en el uso de las herramientas, estaremos siempre a la orden para compartir con usted experiencias y sobretodo para ayudarlo en el aprendizaje.
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/pastopografia.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Topografía</h4>
				  <p>
				  La topografía aplicada permite adquirir los conocimientos necesarios para realizar levantamientos topográficos para futuras aplicaciones y proporciona la capacidad para resolver problemas que se presentan en el campo.
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/pasalgebra.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Curso de Algebra Lineal </h4>
				  <p>
				  No olvide que la clave del éxito en el estudio de las herramientas matemáticas radica en el entendimiento cabal de los conceptos fundamentales y la aplicación razonada enla resolución de problemas.
				  </p>
			</div>
		  </div>
		</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>
<h3>Todos nuestros cursos</h3>
<div class="row" style="text-align:center">
			<div class="span2">
				<div class="well well-small">
					<h4>Algebra Lineal</h4>
					<a href="al.php"><small>Ver detalles</small></a>
				</div>
			</div>
			
			<div class="span2">
				<div class="well well-small">
					<h4>Topografía Elemental</h4>
					<a href="te.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Fundamentos Informáticos</h4>
					<a href="fi.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Fundamentos de programación</h4>
					<a href="fp.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Fundamentos Matemáticos</h4>
					<a href="fm.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Matemáticas Discretas</h4>
					<a href="md.php"><small>Ver detalles</small></a>
				</div>
			</div>

	
			<div class="span12">
				<div class="well well-small">
					<h4 >La educación a distancia, Fundamentos, Teorias y Contribuciones</h4>
					<a href="edf.php"><small>Ver detalles</small></a>

					
					<h4>Material Impreso en la educación a distancia</h4>
					<a href="mie.php"><small>Ver detalles</small></a>


				</div>
			</div>
		
			
			
</div>
<h3>Nuestros cursos mas sobresalientes</h3>
<div class="row">

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Algebra Lineal</h3>	
	<img src="images/algebra.jpg" alt="#"/>
	<div class="caption">
	<h5>Descripción del Curso</h5>	
	<p align="justify">
	
El álgebra lineal es una teoría matemática degeneralizaciones y métodos de análisis, en la que los conceptos son tanimportantes como los cálculos. El álgebra lineal pretende descubrir y matematizar las relaciones existentes entrelas distintas variables que caracterizan un fenómeno o un proceso. El álgebra lineal se aplica en distintos campos dela ciencia y tecnología como los modelos de pronóstico del clima, la investigación de operaciones, la utilización de reómetros, manejo de robots,las ciencias administrativas, etc.
	</p>
	<a class="pull-right" href="al.php">Ver detalles</a>
	<br/>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Topografía Aplicada</h3>	
	<img src="images/topografia.jpg" />
	<div class="caption">
	<h5> Descrioción del Curso</h5>	
	<p align="justify">
	
La topografía aplicada permite adquirir los conocimientos necesarios para realizar levantamientos topográficos para futuras aplicaciones y proporciona la capacidad para resolver problemas que se presentan en el campo. Su estudio es de gran importancia para el diseño de Obras de Ingeniería Civil.
	</p>
	<a class="pull-right" href="ta.php">Ver detalles</a>
	<br/>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Computación Básica</h3>	
	<img src="images/computacion.jpg"/>
	<div class="caption">
	<h5>Descripción del Curso</h5>	
	<p align="justify">
	
La informática es una ciencia  que en la actualidad ha generalizado su uso en las diferentes ramas del conocimiento,  por la capacidad de optimizar procesos así como de brindar soluciones y excelentes herramientas para realizar las tareas de manera sencilla y ágil.
De ahí que el estudio de ésta asignatura proporciona los conocimientos y habilidades necesarias para manejar la computadora, organizar y manipular la información en la realización de sus actividades cotidianas como estudiante y de manera general en el ámbito en el que se desenvuelva
	</p>
	<a class="pull-right" href="cb.php">Ver detalles</a>
	<br/>
	</div>
	</div>
	</div>


</div>
<hr/>
<div class="row">
	<div class="span6">
	<div class="well well-small">
		<h3>Importante</h3>	
		<p>
		Lo mejor para nosotros es proporcionar un acceso libre, sencillo y coherente a los materiales de los cursos que se ofrecen en sus modalidades de estudio presencial y a distancia para educadores, estudiantes y autodidactas de todo el mundo.<br><br></b></b>
		Crear un modelo eficiente basado en estándares generados de OCW Consortium, UNIVERSIA, la tendencia tecnológicas de la Web Social y Semántica.
		</p>
	</div>
	</div>
	<div class="span6">
	<div class="well well-small">
		<h3> Lo que vendrá</h3>
		<h5>Nuevos cursos</h5>	
		<p>
		Tendremos una página actualizada y nuestros miembros podrán contar con todos nuestros cursos disponibles, asi como la visualización de nuevos cursos que se añadan a la página.
		
		</p>
		
	</div>
	</div>
	
	
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Copyright Joseph Godoy, Gerardo Gutierrez y Luis Granda <br/><br/></p>
 </footer>
</div><!-- /container -->
    
	</style>
  </body>
</html>
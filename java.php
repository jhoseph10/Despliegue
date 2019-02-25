<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<link rel="styleSheet" href="estilos.css" type="text/css">
    <title>Lenguejea de programación</title>
</head>
<body>

	<?php
		include "includes/header.inc"
	?>
	
	<section class="container-fluid text-center">
		<div class="row content">
			<div class="col-sm-1"></div>
		
			<article class="col-sm-8 text-left">
				<img class= "img-lenguajes" src="multimedia/java.jpg"  alt="Imagen de java">
				<h3>Historia</h3>
				<p class="ont-weight-normal">
				Java se creó como una herramienta de programación para ser usada en un proyecto de set-top-box en una pequeña operación denominada the Green 
				Project en Sun Microsystems en el año 1991. El equipo (Green Team), compuesto por trece personas y dirigido por James Gosling, trabajó durante 18 
				meses en Sand Hill Road, en Menlo Park, en su desarrollo.</br>
				El lenguaje se denominó inicialmente Oak (por un roble que había fuera de la oficina de Gosling), luego pasó a denominarse Green tras descubrir
				que Oak era ya una marca comercial registrada para adaptadores de tarjetas gráficas, y finalmente se renombró como Java.
				</p>
				<h3>¿Qué es Java?</h3>
				<p>
				Java es un lenguaje de programación de propósito general, concurrente, orientado a objetos, que fue diseñado específicamente para tener 
				tan pocas dependencias de implementación como fuera posible. Su intención es permitir que los desarrolladores de aplicaciones escriban el 
				programa una vez y lo ejecuten en cualquier dispositivo (conocido en inglés como WORA, o "write once, run anywhere"), lo que quiere decir 
				que el código que es ejecutado en una plataforma no tiene que ser recompilado para correr en otra. Java es, a partir de 2012, uno de los 
				lenguajes de programación más populares en uso, particularmente para aplicaciones de cliente-servidor de web, con unos diez millones de usuarios 
				reportados
				</p>
				<h3>El compilador Java</h3>
				<p class="ont-weight-normal">
				Cuando usted programa para la plataforma Java, escribe el código de origen en archivos .java y luego los compila. El compilador verifica su 
				código con las reglas de sintaxis del lenguaje, luego escribe los códigos byte en archivos .class. Los códigos byte son instrucciones estándar
				destinadas a ejecutarse en una Java Virtual Machine (JVM). Al agregar este nivel de abstracción, el compilador Java difiere de los otros 
				compiladores de lenguaje, que escriben instrucciones apropiadas para el chipset de la CPU en el que el programa se ejecutará.
				</p>
				<h3>El kit de desarrollo de Java</h3>
				<p class="ont-weight-normal">
				Cuando usted descarga un kit de desarrollo de Java (JDK), obtiene, — además del compilador y otras herramientas, — una librería de clase 
				completa de programas de utilidad preconstruidos que lo ayudan a cumplir cualquier tarea común al desarrollo de aplicaciones. El mejor modo 
				para tener una idea del ámbito de los paquetes y bibliotecas JDK es verificar la documentación API JDK
				</p>
			
				<a class="btn btn-info" href="https://es.wikipedia.org/wiki/Java_(lenguaje_de_programaci%C3%B3n)" target="_blank" role="button">Más información</a>
			
				<h3 class="espacio">Video de introducción:</h3></br>
				<video controls>
					<source src="multimedia/java.mp4" type="video/mp4">
					Tu navegador no implementa el elemento <code>video</code>.
				</video>
			</article>
			
			<aside class="col-sm-2 list-goup">
				<a href="https://www.w3schools.com/java/default.asp" target="_blank" class="list-group-item list-group-item-action active">Tutorial de Java</a>
				<a href="https://www.java.com/es/download/help/download_options.xml" target="_blank" class="list-group-item list-group-item-action">¿Cómo puedo instalar Java?</a>
				<a href="https://www.java.com/es/download/help/disable_browser.xml" target="_blank" class="list-group-item list-group-item-action">¿Cómo puedo desactivar Java?</a>
			</aside>
		</div>
	</section>

	<?php
		include "includes/footer.inc"
	?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </body>
</html>
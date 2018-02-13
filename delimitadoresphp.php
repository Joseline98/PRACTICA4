<!DOCTYPE html>
<html lang="es">
	<head>
		<title> Delimitadores de codigo PHP </title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href"css/tabs.css"/>
		<link rel="stylesheet" href"css/delimeters.css"/>
		</head>
		<body>
		<header> <h1> Los delimitadores de codigo PHP </h1><br>
		</header>
		<section>
		<article>
		<div class="contenedor-tabs">
		<?php
		
		echo "<span class=\"diana\" id=\"una"\"></span>\n";
		echo "<div class=\"tab\">\n";
		echo "<a href=\"#una\"class=\"tab-e\">Estilo XML </a>\n";
		echo "<div class=\"first\">\n";
		echo "<p class=\"xmltag\">\n";
		echo "Este texto esta escrito en PHP , utilizando las etiquetas mas";
		echo "usuarios y recomendadas para delimitar el codigo PHP, que son:"
		echo "&lt;?php ... ?gt; .>br>\n";
		echo "</p>\n";
		echo "</div>\n";
		echo "</div>\n";
		
		echo "<span class=\"diana\" id=\"tres"\"></span>\n";
		echo "<div class=\"tab\">\n";
		echo "<a href=\"#tres\"class=\"tab-e\">Estilo cortas </a>\n";
		echo "<div>\n";
		echo "<p class=\"shorttag\">";
		echo "Este texto esta escrito en PHP , utilizando las etiquetas mas";
		echo "cortas,<br>\n que son: &lt; ? ... &gt";
		echo "&lt;?php ... ?gt; .>br>\n";
		echo "</p>\n";
		echo "</div>\n";
		echo "</div>\n";
		?>
		</div>
		</article>
		</section>
		</body>
		</html>
		
		
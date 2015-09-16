<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Albatros. Líder Proveedor de Equipo contra Incendio.</title>
</head>
<body>
<?php
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$email = $_POST['email'];
	$celular = $_POST['celular'];
	$comentarios = $_POST['commentarios'];
	$to = 'gerardo@orangeboutiquecreativa.com, al.martinez.alva@gmail.com';
	$title = 'Albatros Landing Page';
	$from = "no-reply@albatrosextintores.mx";

	$headers .= 'From: ' . $from . "\r\n";
	$headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

	$message = '<html><body><head><meta charset="UTF-8"></head>';
	$message .= 'ID: <strong>Albatros </strong><br><br>';
	$message .= 'Nombre de Cliente: ' . '<strong>' .$nombre .' '. $apellidos . '</strong><br><br>';
	$message .= 'Email: ' . '<strong>' . $email . "</strong><br><br>";
	$message .= 'Celular: ' . '<strong>' . $celular . "</strong><br><br>";
	$message .= 'Comentarios: ' . '<strong>' . $comentarios . "</strong><br><br>";
	$message .= '</body></html>';

  
	if ($_POST['submit']) {
	if (mail($to, $title, $message, $headers )) {

	echo '
	<script type="text/javascript">		
			alert("Gracias, en breve nos comunicaremos con usted.");
	</script>
		<!-- Google Code for Registro Albatros Conversion Page -->
		<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 945271065;
		var google_conversion_language = "en";
		var google_conversion_format = "3";
		var google_conversion_color = "ffffff";
		var google_conversion_label = "wGgbCOHV414QmeLewgM";
		var google_remarketing_only = false;
		/* ]]> */
		</script>
		<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
		</script>
		<noscript>
		<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/945271065/?label=wGgbCOHV414QmeLewgM&amp;guid=ON&amp;script=0"/>
		</div>
		</noscript>
		<script type="text/javascript">	
		window.location.href = "http://www.albatrosextintores.mx/info"
		</script>'; 
		} else { 
			echo 'Falló el envio :('; } 
		}
?>
</body>
</html>


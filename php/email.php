<?php 
$destinatario = "andersontrasla@hotmail.com"; 
$asunto = $_POST['asunto']; 
$cuerpo = ' 
<html> 
<head> 
	<meta charset="utf-8">
   <title>Prueba de correo</title> 
</head> 
<body> 
<h1>Nombre:'.$_POST['name'].'</h1> 
<p> <b>Telefono: '.$_POST['phone'].'</b>. </p> 
<p> <b>Correo: '.$_POST['email'].'</b>. </p> 
<p> <b>Mensaje: </b>'.$_POST['message'].'</p> 
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: ".$_POST['name']." <info@aquita.com.co>\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
$headers .= "Reply-To: ".$_POST['email']."\r\n"; 

//ruta del mensaje desde origen a destino 
$headers .= "Return-path: ".$_POST['email']."\r\n"; 

//direcciones que recibián copia 
$headers .= "Cc: ".$_POST['email']."\r\n"; 

//direcciones que recibirán copia oculta 
$headers .= "Bcc: ".$_POST['email']."\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers); 
echo $destinatario.$asunto.$cuerpo.$headers;
?>


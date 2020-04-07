<?php 
echo "hola mundo";

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$destinatario = "pobletemax51@gmail.com"; 
$asunto = $_POST['asunto'];
$cuerpo = $_POST['msm']; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//dirección del remitente 
$headers .= "Desde Web InkPrint"."\r\n"; 

$headers .= "Reply-To: ". $email ."\r\n"; 

//ruta del mensaje desde origen a destino 
$headers .= "<h4> Cliente " .$nombre." : "."</h4> \r\n"; 



mail($destinatario,$asunto,$cuerpo,$headers);

?>







<?php
require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';


include('conexion.php');

$correo = $_POST['txtcorreo'];

$queryusuario 	= mysqli_query($conn,"SELECT * FROM login WHERE correo = '$correo'");
$nr 			= mysqli_num_rows($queryusuario); 
if ($nr == 1)
{
$mostrar		= mysqli_fetch_array($queryusuario); 
$enviarpass 	= $mostrar['pass'];
$name = $mostrar['name']

$paracorreo 		= $correo;
$titulo				= "Recuperar Password";
$mensaje			= sprintf("Tu password es: %s", $enviarpass);
$tucorreo			= "From: xxxx@gmail.com";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "d.a.g.c.4652@gmail.com";
$mail->Password   = "soydelomejor14";

$mail->IsHTML(true);
$mail->AddAddress($correo, $name);
$mail->SetFrom("from-email@gmail.com", "from-name");
$mail->AddReplyTo("reply-to-email@test.com", "noreply");
$mail->Subject = $titulo;
$content = sprintf("<b>Este es un correo automatico generado para recuperar tu contraseña: <br> %s <br><hr> Gracias!.</b>",$mensaje);

$mail->MsgHTML($content); 
if(!$mail->Send()) {
	echo "<script> alert('Error');window.location= 'index.html' </script>";
  var_dump($mail);
} else {
	echo "<script> alert('Contraseña enviado');window.location= 'index.html' </script>";
}

?>
<?php
if(isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["mensaje"]) ){
$to = "grafchac@gmail.com";
$subject = "Asunto: ".$_POST["asunto"];
$contenido .= "Nombre: ".$_POST["nombre"];
$contenido .= "Cel: ".$_POST["telefono"];
$contenido .= "Email: ".$_POST["email"];
$contenido .= "Comentario: ".$_POST["mensaje"];
$header = "From: graficachacabuco.com.ar\nReply-To:".$_POST["email"];
$header .= "Mime-Version: 1.0\n";
$header .= "Content-Type: text/plain";
if(mail($to, $subject, $contenido ,$header)){
    header("Location: ../Index.html");
}
}
?>

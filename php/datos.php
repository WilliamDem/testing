<?php
if(isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["comentario"]) ){
$to = "grafchac@gmail.com";
$subject = "Asunto: ".$_POST["asunto"]."\n";
$contenido .= "Nombre: ".$_POST["nombre"]."\n";
$contenido .= "Cel: ".$_POST["telefono"]."\n\n";
$contenido .= "Email: ".$_POST["email"]."\n\n";
$contenido .= "Comentario: ".$_POST["mensaje"]."\n\n";
$header = "From: graficachacabuco.com.ar\nReply-To:".$_POST["email"]."\n";
$header .= "Mime-Version: 1.0\n";
$header .= "Content-Type: text/plain";
if(mail($to, $subject, $contenido ,$header)){
    header("Location: ../Index.html");
}
}
?>
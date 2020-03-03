<?php
$nombre_formu=$_POST['nombre'];
$apellido_formu=$_POST['apellido'];
$correo_formu=$_POST['correo'];
$mensaje_formu=$_POST['mensaje'];

$cuerpo_mail="Nombre: ".$nombre_formu."\r\n"."Apellido: ".$apellido_formu."\r\n"."Correo: ".$correo_formu."\r\n"."Mensaje: ".$mensaje_formu;

$respuesta="From: $nombre_formu $apellido_formu <$correo_formu>";

mail("macarenaformiconi@gmail.com", "Consulta enviada desde www.misitio.com", $cuerpo_mail, $respuesta);

//Datos Xampp
//$datos_conexion=mysqli_connect("localhost", "root", "", "programadorweb") or die ("Error al conectar con la base de datos");

$datos_conexion=mysqli_connect("localhost", "id11541211_macarenautn", "macarena25", "id11541211_progwebinicial") or die ("Error al conectar con la base de datos");

mysqli_query($datos_conexion, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_formu', '$apellido_formu', '$correo_formu', '$mensaje_formu')");

header ("Location: index.php?e=ok#contact")
?>
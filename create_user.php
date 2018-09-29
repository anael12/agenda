<?php
//Codigo para crear los usuarios
$conexion =
new mysqli('localhost', 'anael','vidanueva','bd_eventos')or die (mysqli_errno($conexion));
$sql="INSERT INTO usuario(nombre,usuario,clave,fec_nacimiento) values(?,?,?,?)";
$insert=$conexion->prepare($sql);
$insert->bind_param("ssss",$nombre,$usuario,$clave,$fec_nacimiento);

$nombre="anael";
$usuario="anael@hotmail.com";
$clave=password_hash("teresa", PASSWORD_DEFAULT);
$fec_nacimiento="6-3-1983";
$insert->execute();

$nombre="Juan carlos";
$usuario="juank@hotmail.com";
$clave=password_hash("passww", PASSWORD_DEFAULT);
$fec_nacimiento="2000-2-31";
$insert->execute();

$nombre="Pablo jose";
$usuario="pablo@hotmail.com";
$clave=password_hash("12345", PASSWORD_DEFAULT);
$fec_nacimiento="2010-6-28";
$insert->execute();

$nombre="Diana josefa";
$usuario="dieg@hotmail.com";
$clave=password_hash("98765", PASSWORD_DEFAULT);
$fec_nacimiento="1990-7-9";
$insert->execute();

$conexion->close();

 ?>

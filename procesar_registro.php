<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$password = $_POST['password'];

$password_encriptado = md5($password);
$query="insert into afiliados values('$nombre','$apellido','$edad','$correo','$password_encriptado',NULL)";

$db = new PDO('mysql:host=localhost;dbname=usuarios','root','');
$db-> query($query);

session_start();
$_SESSION['nombre'] = $nombre;

header('Location: resultado_registro.php');
?>
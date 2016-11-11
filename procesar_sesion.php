<?php
#ENTRADA
$correo = $_POST['correo'];
$password = $_POST['password'];

#PROCESO
$password_encriptado = md5($password);

$db = new PDO('mysql:host=localhost;dbname=usuarios','root','');
$query = "SELECT * from afiliados where correo = '$correo' AND password = '$password_encriptado'";
$sentencia = $db->query($query);
$usuarios_encontrados = $sentencia->rowCount();
$fila = $sentencia->fetch();


#SALIDA
if($usuarios_encontrados == 0){
	header('Location: iniciar_sesion.php?error=datosincorrectos');

}else{
	session_start();
	$_SESSION['nombre'] = $fila['nombre'];
	header('Location: index.php');
}

?>
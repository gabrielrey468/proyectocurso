<?php
include_once("db_conection.php"); // llamamos a la conexion a la base de datos

//Declaramos las variables que contendran los datos del formulario
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
var_dump($_POST); die();


//Iniciamos sesion
session_start();
$_SESSION['usuario'] = $usuario;

//Realizamos la peticion

$consulta = "SELECT * FROM usuario WHERE usuario = '$usuario' and $contrasena = '$contrasena'";

//Realizamos la consulta
$sql = mysqli_query($conexion, $consulta);
$row = mysqli_fetch_array($sql);

//validar datos
if (mysqli_num_rows($sql) != 1) {
    echo "<h1>Usuario y Contraseña incorrectos</h1>";
} else {
    header("location:login.php");
}

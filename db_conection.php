<?php

$conexion = mysqli_connect("127.0.0.1","root","","Login");

if($conexion){
    echo "Conexion Exitosa";
    header ("location:login.php");
}
else{
    echo 'Conexion Fallida';
}
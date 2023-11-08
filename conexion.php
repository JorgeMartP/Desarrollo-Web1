<?php
$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="usuarios";
$conexion = mysqli_connect($db_host, $db_usuario, $db_contra,$db_nombre );

if(mysqli_connect_errno()){
    echo "LA CONEXION CON LA BASE DE DATOS HA FALLADO";
    exit();
}

?>
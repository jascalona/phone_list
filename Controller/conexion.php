<?php

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'XDV';
$port = '3306';

$conexion =  mysqli_connect($server, $user, $password, $database, $port);

if (!$conexion) {
    die ("Conexion: fallida: " . mysqli_connect_error());

} else {
   // echo '</script>alert("Conexion Exitosa!!!")</script>' ;
}

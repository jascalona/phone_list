<?php

$server = '199.167.145.8';
$user = 'gxdeve_admin';
$password = 'G1pzx2p7%11';
$database = 'gxdeve_apps';
$port = '3306';

$conexion =  mysqli_connect($server, $user, $password, $database, $port);

if (!$conexion) {
    die ("Conexion: fallida: " . mysqli_connect_error());

} else {
   // echo '</script>alert("Conexion Exitosa!!!")</script>' ;
}

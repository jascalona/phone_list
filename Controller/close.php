<?php


include "./Controller/conexion.php";

session_start();
session_destroy();
header("location: ../index.php");

?>
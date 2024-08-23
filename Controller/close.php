<?php


include "./Controller/conexion.php";

session_start();
session_destroy();
header("location: http://localhost/phone_list/index.php");

?>
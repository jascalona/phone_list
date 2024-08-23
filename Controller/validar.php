<?php
session_start();
include "./Controller/conexion.php";

if (!empty($_POST['log'])) {
    if (!empty($_POST['user']) and !empty($_POST['password'])) {
        

        $user = $_POST['user'];
        $password = $_POST['password'];


        $sql=$conexion->query(" SELECT *FROM p_llist_phone_log WHERE name='$user' AND password='$password'  ");


        if ($datos=$sql->fetch_object()) {
           // $_SESSION["CI"]= $datos->CI;
            //$_SESSION["user"]= $datos->user;
            //$_SESSION["id"];
            $_SESSION["name"]= $datos->name;
            $_SESSION["surname"]= $datos->surname;
            //$_SESSION["customer"]= $datos->customer;
           // $_SESSION["email"]= $datos->email;
            $_SESSION["roll"]= $datos->roll;



            header("location: ./panel-admin.php");
        } else {
            echo '<div style="background: rgb(211, 6, 47); padding: 20px; position: absolute; margin-top: -200px; font-size: 12px; display: flex; margin-left: -100px;" class="alert alert-danger">Acceso Denegado! Credenciales incorrectas, Verifique e intente de nuevo!</div>';
        }
        

    } else {
        echo "DEBE LLENAR LOS CAMPOS";
    }
}
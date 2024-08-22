<?php
session_start();

include './Controller/conexion.php';

if (!empty($_POST['log'])) {
    if (!empty($_POST['user']) AND !empty($_POST['password'])) {
        
        //var 
        $user = $_POST['user'];
        $password = $_POST['password'];

        $sql=$conexion->query(" SELECT *FROM p_list_phone_log WHERE name='$user' AND password='$password'  ");

        
        if ($datos=$sql->fetch_object()) {
            $_SESSION['name']= $datos->name;
            $_SESSION['surname']= $datos->surname;
            $_SESSION['roll']= $datos->roll;
            
            header("location: https://www.youtube.com/watch?v=ZKZCwtbW28A");

        } else {
            echo '<script>alert("Acceso denegado pendejo")</script>';
        }
        

    } else {
        echo '<script>alert("Debe llenar los Campos")</script>';
    }
}
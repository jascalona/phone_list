<?php

include './CONTROLLER/conexion.php';

if (!empty($_POST['edit'])) {

    if (!empty($_POST['name']) AND !empty($_POST['surname']) AND !empty($_POST['GEO'])
    AND !empty($_POST['phone']) AND !empty($_POST['extension']) ) {
        
        //VAR
        $id = $_POST['id'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $GEO = $_POST['GEO'];
        $phone = $_POST['phone'];
        $extension = $_POST['extension'];

        $sql=$conexion->query(" UPDATE p_list_phone SET  name='$name', surname='$surname', GEO='$GEO', phone='$phone', 
        extension='$extension' WHERE id='$id' ");

        if ($sql==1) {
            header('location: ../registro.php');
        } else {
            echo '<script>alert("Ha Ocurrido un Error de Conexion!")</script>';
        }
        
    } else {}
    echo '<script>alert("Asegurece de llenar todos los Campos!!")</script>';
}


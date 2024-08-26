<?php

include './Controller/conexion.php';

if (!empty($_POST['uloap'])) {
    
    if (!empty($_POST['name']) and !empty($_POST['surname']) and !empty($_POST['GEO']) and
    !empty($_POST['phone']) and !empty($_POST['extension'])) {

        $name =$_POST['name'];
        $surname =$_POST['surname'];
        $GEO =$_POST['GEO'];
        $phone =$_POST['phone'];
        $extension =$_POST['extension'];

        $sql=$conexion->query(" INSERT INTO p_list_phone (name,surname,GEO,phone,extension)VALUES('$name','$surname','$GEO','$phone','$extension') ");

        if ($sql==1) {
            echo '<script>alert("Su registro fue Exitoso!")</script>';
        } else {
            echo '<script>alert("Ha Ocurrido un Error, comuniquese con el administrador de sistemas!")</script>';
        } 
        
        
    } else {
        echo '<script>alert("Debe llenar todos los campos ")</script>';
    } ?>

    <script>
        //sesion Drop cache
        history.replaceState(null,null,location.pathname)
    </script>

<?php }

?>
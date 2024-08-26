<?php
 
include "./Controller/conexion.php";

 if (!empty($_GET['id'])) {
    $id=$_GET['id'];
    $sql=$conexion->query(" DELETE FROM p_list_phone WHERE $id=id ");
    if ($sql==1) {
           
            echo '<script>alert("Se ha eliminado el registro!")</script>' ;

            header('location: https://web.whatsapp.com/');

    } else {
            echo '<script>alert("Ha Ocurrido un error al eliminar este registro!")</script>' ;
    } ?>

    <script>
        //sesion Drop cache
        history.replaceState(null,null,location.pathname)
    </script>

<?php }

?>
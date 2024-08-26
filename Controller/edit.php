<?php

$conexion = mysqli_connect('localhost','root','','XDV','3306' );

$id=$_GET['id'];
$sql=$conexion->query(" SELECT *FROM p_list_phone WHERE id=$id ");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>



    <!--CSS STYLES-->
    <link rel="stylesheet" href="http://localhost/monitoring//CSS/style.css">
    <link rel="stylesheet" href="http://localhost/monitoring//CSS/conf.css">
    <link rel="stylesheet" href="http://localhost/monitoring/CSS/responsive.css">
    <link rel="stylesheet" href="../CSS/FRAMEWORK/bootstrap.css">
    <!--CSS STYLES-->

    <!--BOX-ICONS-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--BOX-ICONS-->

    <!--FRAMEWORK BOOTSTRAP-->
    <script src="./JS/FRAMEWORK/bootstrap.js"></script>
    <script src="./JS/FRAMEWORK/jquery.js"></script>
    <script src="./JS/FRAMEWORK/bootstrap_ii.js"></script>
    <!--FRAMEWORK BOOTSTRAP-->


    <!-- SCRIPT SEARCH-->
    <script src="./JS/search.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- SCRIPT SEARCH-->
</head>
<body style="background-image: url(../images/spencer-davis-ilQmlVIMN4c-unsplash.jpg);">
                            

                    <div class="container-form-r">
                        <div class="container-edit">
                        <?php
                            include './Controller/modification.php';

                            while($datos=$sql->fetch_object()){ ?>

                            <form action="" method="POST">
                                                
                                <input type="hidden" name="id" class="form-control" id="id" placeholder="Ingrese su Nombre" value="<?= $_GET['id']?>">



                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nombre</label>
                                <input type="text" name="name" class="form-control" id="name" value="<?= $datos->name?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Apellido</label>
                                <input type="text" name="surname" class="form-control" id="surname" value="<?= $datos->surname?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Ubicacion</label>
                                <input type="text" name="GEO" class="form-control" id="GEO" value="<?= $datos->GEO?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" id="phone" value="<?= $datos->phone?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Extension</label>
                                <input type="text" name="extension" class="form-control" id="extension" value="<?= $datos->extension?>" required>
                            </div>

                                <?php
                                    }
                                ?>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="../panel-admin.php">Volver</a></button>
                                <button type="submit" name="edit" class="btn btn-primary" value="submit">Modificar</button>
                            </div>

                        </div>
                        </form>
                    </div>



</body>
</html>
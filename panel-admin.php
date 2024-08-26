<?php
session_start();
if (!empty($_SESSION["name"])) {
   header("loaction: ./index.php");
}else{
    if ((time() - $_SESSION['time']) > 40) {
        header("location: ./index.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="./IMG/x.png">


    
    <!-- STYLE CSS & ICONS -->
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/FRAMEWORK/bootstrap.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- STYLE CSS & ICONS -->

    <!-- script -->
    <script src="./JS/Bootstrap.js"></script>
    <script src="./JS/search.js" ></script>
    <!-- script -->

</head>
<body>
    
    <!-- Vistas Administrator -->
    <header>
            <div class="emblem">
                <p>Phone Book Corporation ®Xven</p>
            </div>

            <div class="log_in">
               
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container">

                    <div class="btn-sesion">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                
                                <?php
                                echo $_SESSION["name"];
                                ?>

                                </button>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./Controller/close.php">Cerrar Sesion</a></li>
                                </ul>
                            </div>
                        </div>
            

        </div>    
        </header>




        <!-- SEARCH PHP -->
            <?php
                include './Controller/search.php';
            ?>



        <div class="home-function">

        
            <div class="input-search">
                <form class="d-flex" action="">
                    <input class="form-control me-2 light-table-filter" type="text" data-table="table"  placeholder="Buscar...">
                <!-- <button type="submit"  name="submit" ><i class='bx bx-search-alt' style='color:#fff'></i></button>  -->
                    <button type="submit"  name="reset"><i class='bx bx-reset' style='color:#ffffff'></i></button>
                </form>
            </div>
        <!-- SEARCH PHP -->


        <div class="upload">
                <form action="" method="POST">

                
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"><i class='bx bx-user-plus'></i></button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Agregar Nuevo Registro</b></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        
                        <div class="modal-body">

                            <?php  
                            include './Controller/conexion.php';
                            include './Controller/Uloap.php';
                            ?>

                            
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nombre</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Ingrese su Nombre">
                            </div>


                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Apellido</label>
                                <input type="text" name="surname" class="form-control" id="surname" placeholder="Ingrese su Apellido">
                            </div>


                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Ubicacion</label>
                                <input type="text" name="GEO" class="form-control" id="GEO" placeholder="Ingrese su Ubicacion">
                            </div>


                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Ingrese su Phone">
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Extension</label>
                                <input type="text" name="extension" class="form-control" id="extension" placeholder="Ingrese su Extension">
                            </div>

                            
                        </div>
        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="uloap" class="btn btn-primary" value="submit">Agregar</button>
                        </div>

                    </div>
                    </div>
                </div>

                </form>

        </div>



        <!-- vistas tables -->

        <div class="container-tables">
            <table class="table table-bordered">

                <thead class="table table-dark">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Ubicacion</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Extension</th>
                        <th scope="col"><i class='bx bxs-trash'></i></th>
                        <th scope="col"><i class='bx bxs-edit-alt'></i></th>

                    </tr>
                </thead>

                <?php

                include './Controller/conexion.php';
                include './Controller/search.php';
                include './Controller/drop_p.php';
                
                $sql=$conexion->query( "SELECT *FROM p_list_phone" );
                while($datos=$sql->fetch_object()){
                    ?>    

                    <tr>
                        <td><?= $datos->name?></td>
                        <td><?= $datos->surname?></td>
                        <td><?= $datos->GEO?></td>
                        <td><?= $datos->phone?></td>
                        <td><?= $datos->extension?></td>

                        <td>
                            <a href="./panel-admin.php?id=<?= $datos->id?>"><i class='bx bx-trash-alt'></i></a>
                        </td>

                        <td>
                            <a href="./Controller/edit.php?id=<?= $datos->id?>"><i class='bx bxs-edit-alt'></i></a>
                        </td>


                    </tr>

                    <?php
                    }
                    ?>

                </tbody>

            </table>
        </div>



        <div style="display: flex; justify-content: center; margin: 25px;" class="container-navigation">
            <ul class="pagination">
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
                </li>
            </ul>
        </div>




    <!--START FOOTER-->
       <section style="margin-bottom: 20px;" class="container-fluid footer_section">
                 <div class="footer">
                 <div class="container-fluid" style="display: flex; justify-content: center; margin-top: 50px;">
                  <div class="row">
                      <div class="">
                          <p style="color: #000;" class="m-0">Phone Book Corporation ®Xven
                              &copy;  Todos los derechos reservados. XDV® | Designed by <a href="" style="color: blue;">XDV</a>
                          </p>
                          
                          <div class="linear"></div>
                          <div style="display: flex; justify-content: center;" class="icons">
                              <img style="width: 40px;" src="./IMG/linkedin.svg" alt="">
                              <img style="width: 40px;" src="./IMG/wp.svg" alt="">
                              <img style="width: 40px;" src="./IMG/instagram.svg" alt="">                                
                          </div>
      
                      </div>
                  </div>
              </div>
            </div>
            </div>
            </section>
            <!--START FOOTER-->
    <!-- Vistas Administrator -->


</body>
</html>
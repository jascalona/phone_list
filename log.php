<?php
session_start();
if (!empty($_SESSION["name"])) {
   header("loaction: ./panel.php");
}else{
    if ((time() - $_SESSION['time']) > 40) {
        header("location: ./index.php");
    }
}

?>



<!DOCTYPE html>
<html lang="en">s
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

            <div class="input-search">
                <form class="d-flex" action="">
                    <input class="form-control me-2 light-table-filter" type="text" data-table="table"  placeholder="Buscar...">
                <!-- <button type="submit"  name="submit" ><i class='bx bx-search-alt' style='color:#fff'></i></button>  -->
                    <button type="submit"  name="reset"><i class='bx bx-reset' style='color:#ffffff'></i></button>
                </form>
            </div>
        <!-- SEARCH PHP -->



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
                    </tr>
                </thead>

                <?php

                include './Controller/conexion.php';
                include './Controller/search.php';
                
                    $SQL="SELECT p_list_phone.name, p_list_phone.surname, p_list_phone.GEO, p_list_phone.phone,
                    p_list_phone.extension FROM p_list_phone
                    $where";
                    $dato = mysqli_query($conexion, $SQL);

                    if($dato -> num_rows >1){
                    while($fila=mysqli_fetch_array($dato)){
                    
                    ?>
                        <tr>
                        <td><?php echo $fila['name']; ?></td>
                        <td><?php echo $fila['surname']; ?></td>
                        <td><?php echo $fila['GEO']; ?></td>
                        <td><?php echo $fila['phone']; ?></td>
                        <td><?php echo $fila['extension']; ?></td>

                        </tr>


                    <?php
                    }
                    }else{

                    ?>
                    <tr class="text-center">
                    <td colspan="16">No existen registros</td>
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
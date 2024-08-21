<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="./IMG/x.png">
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="http://localhost/phone_list/CSS/style.css">
    <link rel="stylesheet" href="./CSS/FRAMEWORK/bootstrap.css">
    <!-- STYLE CSS -->

    <!-- script -->
    <script src="./JS/Bootstrap.js"></script>
    <!-- script -->

</head>
<body>

        <header>
            <div class="emblem">
                <p>Phone Book Corporation ®Xven</p>
            </div>

            <div class="log_in">
                
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Log In</button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel"><b>User Accounts</b></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        
                        <div class="modal-body">
                            
                            <form>
                            
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Usuario</label>
                                <input type="text" name="user" class="form-control" id="user" placeholder="Ingrese su Usuario">
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Password</label>
                                <input type="text" name="password" class="form-control" id="password" placeholder="Ingrese su Clave">
                            </div>

                            </form>
                        </div>
        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Log in</button>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        
        </div>    
        </header>



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

                    $sql=$conexion->query(" SELECT *FROM  p_list_phone ");
                    while($datos=$sql->fetch_object()) {
                        ?>
                    


                <tbody class="table table">
                    <tr>
                        <td><?= $datos->name?></td>
                        <td><?= $datos->surname?></td>
                        <td><?= $datos->GEO?></td>
                        <td><?= $datos->phone?></td>
                        <td><?= $datos->extension?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>

            </table>
        </div>



    
</body>
</html>
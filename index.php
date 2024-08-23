
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


<div class="container">

<form action="" method="POST">
    
    <div class="background-lg">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Iniciar Sesion</h1>
        </div>

        <?php
            include './Controller/conexion.php';
            include './Controller/validar.php';
        
        ?>

        <div class="modal-body">

            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">User</label>
                <input type="text" class="form-control" name="user" id="user" placeholder="Ingrese su Correo">
            </div>

            <div class="mb-3">
                <label for="message-text" class="col-form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese su Clave">
            </div>
            
        </div>

        <div class="modal-footer">
            <button type="submit" name="log" id="" class="btn btn-primary" value="submit">Iniciar</button>
        </div>

    </div>

</div>
</form>

</div>



</body>
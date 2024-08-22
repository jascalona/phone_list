<?php


$conexion = mysqli_connect("localhost", "root", "", "XDV", "3306");
//var reposity campos
$where = "";

if (isset($_GET['submit'])) {
    $filter = $_GET['search']; 

    if (isset($_GET['search'])) 
    {
    
    # concatenacion de filtros
    $where= " WHERE name LIKE'%".$filter."%' OR surname LIKE'%".$filter."%' OR GEO LIKE'%".$filter."%'
    OR phone LIKE'%".$filter."%' OR extension LIKE'%".$filter."%'  "; 

    }
}



if (!empty($_GET['reset'])) { ?>
    
    <script>
        //reset cache
        history.replaceState(null,null,location.pathname)
    </script>

<?php
}
?>
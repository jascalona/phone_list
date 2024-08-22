<?php

include './Controller/conexion.php';


//var reposity campos
$where = "";

if (isset($_GET['submit'])) {
    $filter = $_GET['search']; 

    if (isset($_GET['search'])) 
    {
    
    # concatenacion de filtros
    $where= " WHERE surname LIKE'%".$filter."%' OR name LIKE'%".$filter."%'  OR GEO LIKE'%".$filter."%'
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
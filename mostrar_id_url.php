<?php

require_once("bds/conexion.php");

$mostrar_datos_cosultaSql =  "SELECT * FROM imagenes";
$mostrar_datos_cosulta =  mysqli_query($con,$mostrar_datos_cosultaSql);


?>
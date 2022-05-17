<?php 

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "ayudantia";
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


if(mysqli_connect_errno()){
    echo "Error al conectar a la base de datos";
}

?>
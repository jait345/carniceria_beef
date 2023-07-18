<?php
$db=mysqli_connect('localhost','root','12345','carniceria');
//verificar conexion
if(!$db){
    echo "error en la conexion";
    exit;
}

?>

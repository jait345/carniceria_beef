<?php
require 'conexion.php';

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];


// Preparar y ejecutar la consulta SQL para insertar los datos
$sql = "INSERT INTO usuarios (nombre, apellido, edad, correo, mensaje) VALUES ('$nombre', '$apellido', $edad, '$correo', '$mensaje')";

//EJECTUTAR CONSULTA
$resultado =mysqli_query($db, $sql);



if(!$db){
    echo "error en la conexion";
    exit;
} else {
    echo "Datos insertados correctamente";
}


?>

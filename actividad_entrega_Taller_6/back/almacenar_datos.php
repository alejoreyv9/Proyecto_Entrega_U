<?php

include '../db/conexion.php';

if (isset($_POST['almacenar'])) {
 $name = $_POST['nombre'];
 $apellido = $_POST['apellido'];
 $cedula = $_POST['cedula'];

 mysqli_query($conexion, "INSERT INTO usuarios (nombre, apellido, cedula) VALUE (UPPER('$name'), UPPER('.$apellido'), '$cedula'");
}

header ('location: ../base_datos.php')

?>
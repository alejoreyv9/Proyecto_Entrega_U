<?php

include '../db/conexion.php';

if (isset($_POST['actuali'])) {
 $name = $_POST['nombre_act'];
 $apellido = $_POST['apellido_act'];
 $cedula = $_POST['cc'];


 mysqli_query($conexion,"UPDATE usuarios SET nombre = '$name', apellido = '$apellido'
    WHERE cedula = '$cedula'");

}

header ('location: ../base_datos.php')


?>
<?php

include '../db/conexion.php';

if (isset($_POST['actua'])) {
 $name = $_POST['nombre_act'];
 $apellido = $_POST['apellido_act'];
 $cedula = $_POST['cedula'];
}

?>
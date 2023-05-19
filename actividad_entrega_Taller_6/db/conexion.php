<?php

// Esta es la conexion para la base de datos.

$host = 'localhost';
$usuario = 'root';
$password = '';
$basedatos = 'mi_proyecto_taller_6';

$conexion = new mysqli($host,$usuario,$password,$basedatos);

// por si nos da error nos salga esta alerta

if ($conexion->connect_errno) {
 echo "Fallos al conectar a mysql";
 exit();
}

?>
<?php

// Esta es la conexion para traer la informacion de la base de datos.

$host = 'localhost';
$usuario = 'root';
$password = '';
$basedatos = 'my_proyecto';

$conexion = new mysqli($host,$usuario,$password,$basedatos);

// por si nos da error nos salga esta alerta

if ($conexion->connect_errno) {
 echo "Fallos al conectar a mysql";
 exit();
}

?>
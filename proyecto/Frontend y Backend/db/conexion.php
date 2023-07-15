<?php
// Se hace la conexion de la base de datos para traer la informacion y para enviar.

$host = 'localhost';
$usuario = 'root';
$password = '';
$basedatos = 'my_proyecto_entrega';

$conexion = new mysqli($host, $usuario, $password, $basedatos);

// Se genera un aleta por si que gera error la conexion de la se de datos.

if ($conexion -> connect_errno) {
 echo "Fallos al conectar con mysql";
 exit();
}

?>
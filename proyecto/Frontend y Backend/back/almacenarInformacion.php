<?php

 include '../db/conexion.php';

 if (isset($_POST['agregar'])) {
  $name = $_POST['nombreApellido'];
  $email = $_POST['email'];
  $telefono = $_POST['telefono'];
  $descripcion = $_POST['descripcion'];
  $contactar = $_POST['contactar'];
  $horario = $_POST['horario'];
  $novedades = $_POST['novedades'];

  mysqli_query($conexion, "INSERT INTO agendas (nombreApellido, email, telefono, descripcion, contactar, horario, novedades) VALUE ('$name', '$email', '$telefono', '$descripcion', '$contactar', '$horario','$novedades')");

}

header ('location: ../agendas.php');


?>
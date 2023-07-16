<?php
include '../db/conexion.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // Consulta SQL para eliminar el registro con el ID especificado
  mysqli_query($conexion, "DELETE FROM agendas WHERE id = '$id'");

  // Redireccionar a la página de agendas
  header('Location: ../agendas.php');
}
?>

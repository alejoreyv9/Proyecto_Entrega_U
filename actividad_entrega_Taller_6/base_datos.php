<!-- Se hace la conexion de la base de datos para el llamado de ella y poderla incluir -->
<?php

include 'db/conexion.php';

$query = mysqli_query($conexion, "SELECT * FROM usuarios");

$query2 = mysqli_query($conexion, "SELECT cedula FROM usuarios");

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="css/base_datos.css">
 <title>Base de datos</title>
</head>
<body>

 <!-- Se agrega el Icono para volver al Inicio -->


<a href="index.html">
 <img class="homeIcono" src="img/IconoHome VerdeClaro.png" alt="">
</a>

<!-- Se hace la barra donde filtra los usuarios y para mirar cuantos quiere ver. -->

<div class="filtrador">
 <div class="contenedor">
  <div class="filtroGeneral>
  <div class="filtroNumeros">
   <select class="seleGrupo">
    <option value="5" selected="selected">5</option>
    <option value="10">10</option>
    <option value="15">15</option>
    <option value="20">20</option>
   </select>
  </div>
  </div>

  <div class="filtroGeneral"></div>
  <div class="filtroBuscar">
   <input type="text" name="search" class="seleGrupo" placeholder="Introduce tu palabra clave.">
  </div>


<!-- Se hace la tabla y se le llama a la base de
datos. -->


 <tabla id="tabla" class="tablafilaNombre">
  <thead>
   <tr class="filasTabla">
    <th>#</th>
    <th>Id</th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Cédulas</th>
   </tr>
  </thead>


 <!-- Se realiza el llamado de la base de datos en PHP en un tbody -->

  <tbody>

 <?php
   while ($datos = mysqli_fetch_array($query)) {
    $id = $datos['id'];
    $nombre = $datos['nombre'];
    $apellido = $datos['apellido'];
    $cedula = $datos['cedula'];

    // Asi los imprime arriba  y aca abajo ⇩ el de la salida.

    echo '
    <tr data-url="FQS7i2z1CoA">
      <td></td>
      <td>'.$id.'</td>
      <td>'.$nombre.'</td>
      <td>'.$apellido.'</td>
      <td>'.$cedula.'</td>
    </tr>
    ';
  }
 ?>
  </tbody>
 </tabla>

 <!-- Se hace un siguientes y un anterior -->

      <div class="controlPagina">
        <ul class="paginacion"></ul>
        <ul class="selecPaginacion">
        <li><a href="javascript:void(0)" class="antePage">Anterior</a></li>
        <li><a href="javascript:void(0)" class="siguiPage">Siguiente</a></li>
        </ul>
      </div>
    </div>
  </div>


<!-- Se hace el proceso de Insertar nuevos usuarios -->

<h1 class="tituloInsert">Formulario de Insertar <u>(INSERT)</u></h1>

<form action="back/almacenar_datos.php" method="POST">
  <input type="text" name="nombre" placeholder="Digite el nombre...">
  <input type="text" name="apellido" placeholder="Digite el apellido...">
  <input type="text" name="cedula" placeholder="Digite la cédula...">

  <!-- Boton de enviar -->

  <input type="submit" name="guardar" value="guardar">
</form>

<!-- Se hace la agregacion del actualizar un UPDATE -->

<h1 class="tituloActua">Formulario de Actualizar <u>(UPDATE)</u></h1>

<form action="" method="POST">
  <select name="id_consulta" >
    <?php
    while ($datos2 = mysqli_fetch_array($query2)) {
      $cedula_query = $datos2['cedula'];
      echo '
      <option value="'.$cedula_query.'">'.$cedula_query.'</option>
      ';
    }
    ?>
  </select>

  <!-- Un boton para enviar la actualizacion -->

  <input type="submit" name="buscarAct" value="Buscar">
</form>

<!-- Se crea el codigo de php -->

<?php


if (isset($_POST['buscarAct'])) {
  $id_cc_query = $_POST['id_consulta'];
  echo '
  <h1>Igrese los nuevos datos para la cedula que va actualizar = '.$id_cc_query.'</h1>
  <form action="back/actualizar_datos.php" method="POST">
  <input type="text" name="nombre_act" placeholder="Digite nuevo Nombre">
  <input type="hidden" value="'.$id_cc_query.'" name="cc">
  <input type="text" name="apellido_act" placeholder="Digite nuevo Apellido">
  <input type="submit" name="actuali" value="Actualizar">
  </form>
  ';
}
?>

<!-- Se hace la realizacion del llamado del script de arriba -->


  <!-- <script>
    function upperCase() {
      var x = document.getElementById("fname").value
      document.getElementById("fname").value = x.toUpperCase()
    }
  </script> -->

</body>
</html>
<?php

 include ('db/conexion.php');

 $query = mysqli_query($conexion,"SELECT * FROM agendas");

?>

<!DOCTYPE html>
<html lang="es">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Listado citas agendadas</title>
 <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


<!-- La barra de arriba que trae informacion -->

<header>
  <div class="caja">
   <h1><img src="img/logo.png"></h1>
   <nav>
    <ul>
     <li><a href="index.html">Home</a></li>
     <li><a href="productos.html">Productos</a></li>
     <li><a href="contacto.php">Contacto</a></li>
     <li><a href="agendas.php">Listado Citas</a></li>
    </ul>
   </nav>
  </div>
 </header>


 <!-- Se hace el llamdo de un formulario en la base de datos. -->


 <table id="music" class="table table-responsive table-hover">
            <thead>
            <tr  class="myHead">
                <th>id</th>
                <th>Nombre y Apellido</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Mensaje</th>
                <th>Contactar</th>
                <th>horario</th>
                <th>Novedades</th>
            </tr>
            </thead>
            <tbody>

            <?php
            while ($datos = mysqli_fetch_array($query)) {
                $id = $datos['id'];
                $nombreApellido = $datos['nombreApellido'];
                $email = $datos['email'];
                $telefono = $datos['telefono'];
                $descripcion = $datos['descripcion'];
                $contactar = $datos['contactar'];
                $horario = $datos['horario'];
                $novedades = $datos['novedades'];

                echo'
                <tr">
                    <td>'.$id.'</td>
                    <td>'.$nombreApellido.'</td>
                    <td>'.$email.'</td>
                    <td>'.$descripcion.'</td>
                    <td>'.$descripcion.'</td>
                    <td>'.$contactar.'</td>
                    <td>'.$horario.'</td>
                    <td>'.$novedades.'</td>
                </tr>
                ';
            }

            ?>
            </tbody>
        </table>



    <!-- La barra de abajo con informaicon -->

    <footer>
        <img src="img/logo-blanco.png" alt="Logo de la Barbería Alura">
        <p class="copyright">&copy Copyright Barbería Alura - 2020</p>
    </footer>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="css/methodoGet.CSS">
 <title>Envío de Datos GET.</title>
</head>
<body>
<a href="index.html">
 <img class="homeIcono" src="img/IconoHome VerdeClaro.png" alt="">
</a>

<!-- Se hace la realizacion del formulario -->

<div class="metodoIniForm">

<div class="formuTodo">

<div class="tituloTex">
 <h1 class="tituloTema">Envía datos por el metodo GET.</h1>
</div>
<hr>

 <form action="" method="GET">

   <div class="formularioGrupo">
    <label for="NompreParaInput">Nombre:</label>
    <input type="text" name="nombre" class="formControl" id="NompreParaInput" placeholder="Digita su Nombre">
   </div>

   <div class="formularioGrupo">
    <label for="ApellidoParaInput">Apellido:</label>
    <input type="text" name="apellido" class="formControl" id="ApellidoParaInput" placeholder="Digite su Apellido">
   </div>

   <div class="formularioGrupo">
    <label for="cedulaParaInput">Cédula:</label>
    <input type="text" name="cc" class="formControl" id="cedulaParaInput" placeholder="Digite Su Cédula">
   </div>

  <button type="submit" name="enviar" class="BotonEnviar">Envíar</button>
 </form>


<!-- Se Hace el proceso de enviado con metodo GET Y PHP -->
<div class="resultadoGet">
<?php

if (isset($_GET['enviar'])) {
 $nombre = $_GET['nombre'];
 $apellido = $_GET['apellido'];
 $cedula = $_GET['cc'];

 echo '<h2 class="nombreEcho">Nombre : '.$nombre.'</h2>';
 echo '<h2 class="apellidoEcho">Apellido : '.$apellido.'</h2>';
 echo '<h2 class="cedulaEcho">Cédula : '.$cedula.'</h2>';
}


?>
</div>


</div>

</body>
</html>
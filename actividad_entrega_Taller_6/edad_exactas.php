<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="css/edadExacta.css">
 <title>Calculo de la edad Exacta.</title>
</head>
<body>
 <!-- Se agrega el Icono para volver al Inicio -->
<a href="index.html">
 <img class="homeIcono" src="img/IconoHome VerdeClaro.png" alt="">
</a>

<!-- Se hace la solicitud por medio de un formulario -->

<div class="ordenComple">

<div class="formuTodo">
<div class="tituloTex">
 <h1 class="tituloTema">Calcula tu edad EXACTA</h1>
</div>
<hr>

 <form action="" method="POST" >

 <div class="grupoForm">

  <label for="fechaNacimiento">Seleccione su fecha de nacimiento:</label>
  <input type="date" name="fecha" class="seleFecha"
  id="fechaNacimiento">
 </div>

 <button type="submit" name="enviar" class="enviarFecha">Envíar Fecha</button>
 </form>


<!-- Se hace las comparaciones con PHP para el calculo -->

<div class="salidaInfo">
<?php


if (isset($_POST['enviar'])) {
 $fechaNaci = new DateTime($_POST['fecha']);

 $datos2 = new DateTime(date("y-m-d"));

 $diff = $fechaNaci -> diff ($datos2);

 $edad_actual = $diff->y;
 $edad_meses = $diff->m;
 $edad_dias = $diff->d;




 echo '<h3>Años de edad: '.$edad_actual.', Meses: '.$edad_meses.' dias: '.$edad_dias.'</h3>';
}


?>
</div>

</div>
</body>
</html>
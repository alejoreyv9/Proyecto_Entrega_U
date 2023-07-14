<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="css/menorMayor.css">
 <title>Mayor > y < Menor EDAD</title>
</head>


<body>
<a href="index.html">
 <img class="homeIcono" src="img/IconoHome VerdeClaro.png" alt="">
</a>

<div class="formuTodo">

<div class="tituloTex">
 <h1 class="tituloTema">Calcula SI es MAYOR o MENOR de EDAD.</h1>
</div>
<hr>

 <form action="" method="POST">
  <div class="formGrupo">

   <label for="edadControl">Edad:</label>
   <input type="number" name="edad" class="formatoInput" id="controlEdadInput" placeholder="Digite su edad">

  </div>

  <button type="submit" name="verificar" class="botonEnviar">Enviar Datos.</button>

 </form>


 <!-- Se hace la operacion del las edades de PHP -->
<div class="fondoResul">
 <?php


 $edad = 0;

 if (isset($_POST['verificar'])) {
  $edad = $_POST['edad'];

  if ($edad >= 18) {
   echo '<h1 class="mayorEda">Es <u class="resaMay">MAYOR</u> de edad.</h1>';
  }
  else if (18 > $edad && 0 < $edad) {
   echo '<h1 class="menorEda">Es <u class="resaMen">MENOR</u> de edad.</h1>';
  }else {
   echo '<h1 class="novalido"><u class="resaltNoVali">No valido.</u></h1>';
  }
 }

 ?>


</div>
</div>

</body>
</html>
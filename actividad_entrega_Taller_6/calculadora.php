<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="css/calculadora.css">
 <title>Calculadora de Operaciones</title>
</head>


<body>

<!-- Se agrega el Icono para volver al Inicio -->


<a href="index.html">
 <img class="homeIcono" src="img/IconoHome VerdeClaro.png" alt="">
</a>


<!-- Qui inicia el Formulario -->

 <div class="formularioControl">
  <h1 class="calculadoraTitulo" >CALCULADORA</h1>
  <hr>

  <!-- Se crea el formulario de Ingresar los numeros -->
  <div class="ingresaForm">
   <label for="control1">Número 1:</label>
   <input type="number" name="num1" class="formControl" id="control1" placeholder="Ingrese Número 1">
  </div>
  <div class="ingresaForm">
   <label for="control2">Número 2:</label>
   <input type="number" name="num2" class="formControl" id="control2" placeholder="Ingrese Número 2">
  </div>


  <!-- Se ingresa la seleccion del tipo de operacion -->
  <div class="ingresaForm">
   <label for="selecControl1">Seleccione la operación:</label>
   <select class="selecControl" name="tipo" id="controlSelec1">
    <option value="1">Suma</option>
    <option value="2">Resta</option>
    <option value="3">Multiplicación</option>
    <option value="4">División</option>
   </select>
  </div>

  <!-- El Boton para enviar y que haga la operacion -->
  <button type="submit" name="igual" class="botonIgual">IGUAL A.</button>
 </form>

 <!-- El proceso con el backen de que se haga la Operacion -->

 <?php

$num1 = 0;
$num2 = 0;
$tipo = 0;
$resultado = 0;

// $n1 = $n2 = $tipo = $result = 0;

if (isset($_POST['igual'])) {
 $num1 = $_POST['num1'];
 $num2 = $_POST['num2'];
 $tipo = $_POST['tipo'];

 switch ($tipo) {
  case '1':
   $resultado = $num1 + $num2;
   break;
  case '2':
   $resultado = $num1 - $num2;
   break;
  case '3':
   $resultado = $num1 * $num2;
   break;
  case '4':
   $resultado = $num1 / $num2;
   break;
 }
 echo '<h1 class="resultado">Total: '.$resultado.'</h1>';
}
 ?>
 </div>

</body>
</html>
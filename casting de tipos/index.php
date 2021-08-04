<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Casting de tipos</title>
</head>
<body>
  <h1>Casting de tipos</h1>

  <?php

  //gettype() => retorno o tipo da variavel
  $valor = 10;
  $valor1 = 15.35;
  $valor2 = (float) $valor; // doble float
  $valor3 = (string) $valor2;
  $valor4 = (int) $valor1;

  echo $valor. ' ' .gettype($valor);
  echo '<br>';
  echo $valor1. ' ' .gettype($valor1);
  echo '<br>';
  echo $valor2. ' ' .gettype($valor2);
  echo '<br>';
  echo $valor3. ' ' .gettype($valor3);
  echo '<br>';
  echo $valor4. ' ' .gettype($valor4);
  
  
  ?>
  
</body>
</html>
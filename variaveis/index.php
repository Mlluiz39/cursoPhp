<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variveis PHP</title>
</head>
<body>
  <h1>Variáveis PHP</h1>

  <?php
  //string
  $nome = 'Marcelo';
  $sobrenome = "Luiz";
  //int
  $idade = 42;
  //float
  $peso = 103.7;
  //boolean
  $fuma_sn = true;
  $fuma_ns = false;
  ?>

  <h2>Ficha cadastral</h2>
  <br>
  <p>Nome: <?= $nome ?></p>
  <p>Sobrenome: <?= $sobrenome ?></p>
  <p>Idade: <?= $idade ?></p>
  <p>Peso: <?= $peso ?></p>
  <p>Fumante: <?= $fuma_sn ?></p>
  <p>Fumante: <?= $fuma_ns ?></p>  <!--aqui naõ vai imprimir nada pois é 0 -->
  
</body>
</html>
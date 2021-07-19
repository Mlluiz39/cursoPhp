<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Concatenação</title>
</head>
<body>
  <h1>Concatenação</h1>

  <?php
  $nome = 'Marcelo';
  $concat = 'concatenação';
  $data = '19/07/2021';
  $program = 'Programação';

  //operador

  echo 'Olá ' . $nome . ', vamos praticar um pouco de ' . $concat . ' hoje: ' . $data;

  /*concatenação com aspas duplas
  uma dica caso queira imprimir somente strings use aspas simples
  se quiser concatenar sem ser com o operador . use aspas duplas
  */
  echo '</br><br>';

  echo "Ola, $nome vi que você gosta de $program !"

  
  ?>
  
</body>
</html>
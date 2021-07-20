<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>If e Else</title>
</head>
<body>
  <h1>Controle IF e ELSE</h1>

  <?php

  //diferente
  if(2 <> 3) {
    echo 'Verdadeiro';
  } else {
    echo 'Falso';
  }

  echo '<br><br>';
//  NÃO IDENTICO "difentes e de tipos direntes"
  if(5 !== '5') {
    echo 'Verdadeiro';
  } else {
    echo 'Falso';
  }

echo '<br><br>';

  if('6' == '6') // aqui se for verdadeiro ele apresenta todo o bloco abaixo
  echo 'Verdadeiro';  // se for falso apenas as condições seguintes a primeira instrução
  echo ' Segundo verdadeiro';
  echo 'Terceiro verdadeiro'; 
  ?>
  
</body>
</html>
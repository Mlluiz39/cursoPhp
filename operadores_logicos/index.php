<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores Logicos</title>
</head>
<body>
  
  <?php
  if(5 == 3 && 10> 3) {
    echo 'Verdadeiro';
  } else {
    echo 'Falso';
  }

  echo '<br><br>';

  if(3 == 4 || 10 < 3) {
    echo ' Verdadeiro';
  } else {
    echo 'Falso';
  }

  echo '<br><br>';

  // XOR: XOR -> retorna true se uma das expressões for true e a outra falsa, ou vice-versa 
if (4 == 4 XOR 10 > 15) {
  echo 'Verdadeiro';
} else {
  echo 'Falso';
}

echo '<br><br>';

if(!(7 >= 4 XOR 10 < 15)) {  // aqui inverte o valor com operador de negação
  echo ' Verdadeiro';
} else {
  echo 'Falso';
}

$Usuario_possui_cartao_loja = true;
$valor_compra = 99;

$valor_frete = 50;
$recebeu_desconto_frete = false;

if($Usuario_possui_cartao_loja || $valor_compra >= 100) {
  $valor_frete = 0;
  $recebeu_desconto_frete = true;
}

?>

<h1>Detalhes do Pedido</h1>

<p>Possui cartão da loja?

<?php
if($Usuario_possui_cartao_loja) {
  echo 'SIM';
} else {
  echo 'NÃO';
}
?>
</p>
<p>Valor da compra: <?=$valor_compra ?></p>

<p>Recebeu desconto no frete?

<?php
if($recebeu_desconto_frete) {
  echo 'SIM';
} else {
  echo 'NÃO';
}
?>
</p>

<p>Valor do frete: <?=$valor_frete ?></p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funções</title>
</head>
<body>
<h1>Funções</h1>

<?php
    //void
    function exibirBoasVindas() {
        echo "Bem-vindo ao curso de PHP! <br />";
    }

    exibirBoasVindas();

    //return (com retorno)
    function calcularAreaTerreno($largura, $comprimento) {
        $area = $largura * $comprimento;
        return $area;
    }

    echo calcularAreaTerreno(5, 25);
    echo '<br />';
    echo calcularAreaTerreno(15, 125);
    echo '<br />';
    echo calcularAreaTerreno(30, 50);
    echo '<br />';
    echo calcularAreaTerreno(5, 30);
    echo '<br />';

    //atribuir a uma variavel
    $resultado = calcularAreaTerreno(5, 25);
    echo "O valor da variavel resultado é $resultado";

    ?>
  
</body>
</html>
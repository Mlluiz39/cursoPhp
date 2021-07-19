<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variaveis Constantes</title>
</head>
<body>
  <h1>Variaveis Constantes</h1>

  <?php
    define('BD_URL', 'endereco_bd_dev');
    define('BD_USUARIO', 'usuario_dev');
    define('BD_SENHA', 'senha_dev');
    const BD_EMAIL = 'mlluiz@gmail.com';

    // ..lógica ..//

    /*define('BD_URL', 'endereco_bd_prod'); aqui dá um erro pois a constante
    'BR_url' já foi declarada
    */

    echo BD_URL . '<br>';
    echo BD_USUARIO . '<br>';
    echo BD_SENHA . '<br>';
    echo BD_EMAIL;
  ?>
  
</body>
</html>
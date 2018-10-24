<html>
  <head>
    <meta charset="utf-8"
    <title="Curso PHP">
  </head>

  <body>
    <?php

    $nome = 'Matheus';
    $cor  = 'preto';
    $idade = 18;
    $atividade = 'videogame';
      // Concatenação operador '.'
      echo 'Olá ' . $nome . ', vi que sua cor preferida é '. $cor . ', estou vendo também que você possui '. $idade .' anos e que gosta de '. $atividade;
      // Concatenação com aspas duplas

      echo '<br/> <br/>';

      echo "Olá $nome, vi que sua cor preferida é $cor, estou vendo também que você possui $idade anos e que gosta de $atividade";
    ?>
  </body>
</html>

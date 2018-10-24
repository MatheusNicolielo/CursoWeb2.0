<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 2</title>
  </head>
  <body>
    <?php

      $valor= 9;

      if ((($valor % 10)== 0) || (($valor % 5)== 0)
    || (($valor % 2)== 0)) {

          if (($valor % 10)== 0) {
            echo "Divisivel por 10 <br/>";
          }

          if (($valor % 5)== 0) {
            echo "Divisivel por 5 <br/>";
          }

          if (($valor % 2)== 0) {
            echo "Divisivel por 2 <br/>";
          }

    }else {
      echo "Não divisivel por nenhum dos valores!";
    }
     ?>
  </body>
</html>

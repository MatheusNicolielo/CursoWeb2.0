<html>
  <head>
    <meta charset="utf-8">
  <title> Casting entre tipos de variáveis</title>
  </head>

  <body>
    <?php
      //gettype() : retorna o tipo da variável
      $valor = 10;

      //$valor2 = (float) $valor; // float, double, real
      //$valor2 = (string) $valor; // string

      //$valor2 = (integer) $valor; // integer, int
      //$valor2 = (string)  $valor;

      //$valor2 = (boolean) $valor; //bool, boolean

      //$valor2 = (int) $valor;

      echo $valor . '' . gettype($valor);
      echo "</br>";
      echo $valor . '' . gettype($valor2);
     ?>
  </body>

</html>

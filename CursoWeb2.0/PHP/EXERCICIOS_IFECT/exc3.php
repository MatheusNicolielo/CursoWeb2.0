<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 3</title>
  </head>
  <body>
    <?php
      $nome = 'Caroline';
      $sexo = 'Feminino';
      $idade= 18;

      if (($sexo == 'Feminino') && $idade<25) {
        echo "Nome: $nome <br/>";
        echo "ACEITA";
      }else {
        echo "Nome: $nome <br/>";
        echo "NÃO ACEITA";
      }
     ?>
  </body>
</html>

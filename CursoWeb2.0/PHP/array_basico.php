<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array Introdução</title>
  </head>
  <body>
    <?php
      // SEQUENCIAIS (NUMÉRICOS)
        $lista_frutas = array('Banana','Maça','Morango','Uva', ); //  ou $lista_frutas = ['Banana','Maça','Morango','Uva', ];
          $lista_frutas[] = 'Abacaxi';

          var_dump($lista_frutas);
          echo "<hr/>";
          print_r($lista_frutas);

      //------------------------
      // ASSOCIATIVOS
        $lista_frutas2 = array('a' =>'Banana',
                              'b' =>'Maça',
                              'x' =>'Morango',
                              '2' =>'Uva', );
      //------------------------

      var_dump($lista_frutas2);
     ?>
  </body>
</html>

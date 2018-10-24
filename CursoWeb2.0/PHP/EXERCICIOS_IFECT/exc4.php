<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 4</title>
  </head>
  <body>
    <?php
      $n1 = 70;
      $n2 = 30.5;
      $n3 = 30;
      function maiorNmr($v1,$v2,$v3){

        if (($v1>$v2) && $v1>$v3)
        {
          echo "Maior nmr: $v1 <br/>";
          if ($v2>$v3)
          {
            echo "Segundo: $v2 <br/>";
            echo "Ultimo: $v3";
          }else
            {
              echo "Segundo: $v3 <br/>";
              echo "Ultimo: $v2";
            }
        }

      }

      maiorNmr($n1,$n2,$n3);
      maiorNmr($n2,$n1,$n2);
      maiorNmr($n3,$n1,$n2);


     ?>
  </body>
</html>

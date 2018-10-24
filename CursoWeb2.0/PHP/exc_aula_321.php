<html>
  <head>
    <meta charset="utf-8">
  <title> Exercicio da Aula 321</title>
  </head>

  <body>
    <?php

      $salario = 3600;

      function calcularImposto($salario){
        if($salario <= 1903.98)
        {
          $imposto = 0;
        }elseif ($salario <= 2826.65) {
          $imposto = $salario * 0.075;
        }elseif ($salario <= 3751.05) {
          $imposto = $salario * 0.15;
        }elseif ($salario <= 4664.68) {
          $imposto = $salario * 0.225;
        }else {
          $imposto = $salario * 0.275;
        }

        return $imposto;
      }



      $v_imposto=calcularImposto($salario);

      echo "O valor do salário é $salario <br/>";
      echo "O valor do imposto é $v_imposto <br/>";
      echo 'O novo salario é: ' . ($salario - $v_imposto) .'<br/>';
     ?>
  </body>

</html>

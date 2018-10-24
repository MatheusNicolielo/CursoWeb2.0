<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Funções Data</title>
  </head>
  <body>
    <?php
      // Recuperação da data atual / Data Corrente
      //  echo date('d');

        $data_inicial = '2018-04-24';
        $data_final   = '2018-05-15';

        //timestamp

        $time_inicial = strtotime($data_inicial);
        $time_final   = strtotime($data_final);

        echo $data_inicial . ' - ' . $time_inicial;
          echo '<br/>';
        echo $data_final . ' - ' . $time_final;
          echo "<br/>";
        $diferenca_time = $time_final - $time_inicial; //abs

        echo "A diferença de segundos entre a data inicial e final é: $diferenca_time";

        $segundos_existem_dia = 24 * 60 * 60;

        echo "<br/>";


        echo "Um dia possui $segundos_existem_dia segundos ";

        $diferenca_de_dias_entre_as_datas = $diferenca_time / $segundos_existem_dia;

        echo "<br/>";

        echo "A diferença em dias é: $diferenca_de_dias_entre_as_datas";
        
     ?>
  </body>
</html>

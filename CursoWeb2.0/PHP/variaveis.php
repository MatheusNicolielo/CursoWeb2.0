<html>
  <head>
    <meta charset="utf-8"
    <title="Curso PHP">
  </head>

  <body>
    <?php
      // Variável String
        $nome = 'Matheus Nicolielo Serafim dos Santos';
      // Variável int
        $idade = 18;
      // Variável float
        $peso = 70.5;
      // Variável Boolean //true = 1 , false = NIL
        $fumante = false;
    ?>

    <h1>Ficha cadastral</h1>
    <br/>
    <p>Nome:<?= $nome ?></p>
    <p>Idade:<?= $idade ?>  </p>
    <p>Peso: <?= $peso?></p>
    <p>Fumante:<?= $fumante?></p>

  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 5</title>
  </head>
  <body>
    <?php
      $livro = 'As histórias de TinTin';
      $usuario = 'Professor';

      if ($usuario == 'Aluno') {
        $prazo = 3;
      }else {
        $prazo = 10;
      }
     ?>

     <h1>Recibo</h1>

     <?="Nome do livro: $livro <br/>" ?>
     <?="Usuário: $usuario <br/>"?>
     <?="Prazo Devolução: $prazo dias <br/>"?>

  </body>
</html>

<html>
  <head>
    <meta charset="utf-8">
    <title>IF-Else Praticando</title>
  </head>

  <body>
    <?php

        //
        $usuario_possui_cartao_loja = true;
        $valor_compra = 225;

        $valor_frete = 50;
        $recebeu_desconto_frete = false;

        if ($usuario_possui_cartao_loja == true && $valor_compra >= 100) {
          $valor_frete = 0;
          $recebeu_desconto_frete = true;
        }
    ?>

      <h1>Detalhes do Pedido</h1>

      <p>
        Possui cartão da loja? <?= $usuario_possui_cartao_loja ? "Sim" : "Não"; ?>
        <?php
          // <condição> ? true : false



          /*
          if ($usuario_possui_cartao_loja == true) {
            echo "Sim";
          }else {
            echo "Não";
          }
          */
        ?>
      </p>

      <p> Valor da Compra:
        <?= $valor_compra ?>
      </p>

      <p>
        Recebeu desconto no Frete?
        <?php

          $teste = $recebeu_desconto_frete ? 'SIM' : 'NÃO';
          echo $teste;

        /*
          if ($recebeu_desconto_frete == true) {
            echo "Sim";
          }else {
            echo "Não";
          }
          */
        ?>
      </p>

      <p> Valor do Frete:
        <?= $valor_frete ?>
      </p>
  </body>
</html>

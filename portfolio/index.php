<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ricardo Franco</title>
</head>

<body>

  <?php
  $nome = "Ricardo";
  $saudacao = "Olá";
  $titulo = $saudacao . ", Porfólio do " . $nome;

  $subtitle = "Informações adicionais";
  $idade = 25;
  $formacao = "Análise e Desenvolvimento de Sistemas";
  $stack = "Java, Spring, SQL, PHP";

  $projeto = "Meu Projeto";
  $finalizado = true; // também pode ser representado por 1 ou 0 -> por conta do binário
  $dataDoProjeto = "2026-10-11";
  $descricao = "Meu primeiro projeto. Escrito em PHP e HTML";
  $ano = "2020";
  ?>

  <h1><?= $titulo ?></h1>
  <h3><?= $subtitle ?></h3>
  <p><?= "Idade: " . $idade ?></p>
  <p><?= "Formação: " . $formacao ?></p>
  <p><?= "Habilidade: " . $stack ?></p>

  <hr>

  <div
    <?php if (!((2024 - $ano) > 2)): ?>
    style="background-color: burlywood;"
    <?php endif; ?>>
    <h2><?= $projeto ?></h2>
    <p><?= $descricao ?></p>

    <div>
      <div><?= $dataDoProjeto ?></div>
      <div>
        Projeto:
        <?php if (!$finalizado): ?>
          <span>❌ não finalizado</span>
        <?php else: ?>
          <span>✅ finalizado</span>
        <?php endif; ?>

      </div>
    </div>
  </div>

</body>

</html>
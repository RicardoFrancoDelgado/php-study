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

  $trabalhos = "Meu Projeto";
  $finalizado = true; // também pode ser representado por 1 ou 0 -> por conta do binário
  $dataDoProjeto = "2026-10-11";
  $descricao = "Meu primeiro projeto. Escrito em PHP e HTML";
  $ano = "2020";

  $projetos = [
    [
      "titulo" => "Meu Portfólio",
      "concluido" => true,
      "data" => "2020-03-27",
      "descricao" => "Meu primeiro portfólio. Escrito em PHP e HTML."
    ],
    [
      "titulo" => "Lista de Tarefas",
      "concluido" => true,
      "data" => "2020-05-27",
      "descricao" => "Lista de tarefas. Escrito em PHP e HTML."
    ],
    // "Lista de tarefas",
    // "Controle de Leitura de livros",
    // "Mais um Projeto",
    // "Outro projeto adicionado"
  ];
  ?>

  <h1><?= $titulo ?></h1>
  <h3><?= $subtitle ?></h3>
  <p><?= "Idade: " . $idade ?></p>
  <p><?= "Formação: " . $formacao ?></p>
  <p><?= "Habilidade: " . $stack ?></p>

  <hr>
  <ul>

    <?php foreach ($projetos as $projeto): ?>

      <div
        <?php if (((2024 - $projeto['data']) > 2)): ?>
        style="background-color: burlywood;"
        <?php endif; ?>>
        <h2><?= $projeto['titulo'] ?></h2>
        <p><?= $projeto['descricao'] ?></p>

        <div>
          <div><?= $projeto['data'] ?></div>
          <div>
            Projeto:
            <?php if (!$projeto['concluido']): ?>
              <span>❌ não finalizado</span>
            <?php else: ?>
              <span>✅ finalizado</span>
            <?php endif; ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </ul>

</body>

</html>
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
    [
      "titulo" => "Controle de leitura de livros",
      "concluido" => false,
      "data" => "2020-05-27",
      "descricao" => "Lista de Livros."
    ],
    [
      "titulo" => "Projeto não finalizado",
      "concluido" => false,
      "data" => "2020-05-27",
      "descricao" => "Projeto em andamento"
    ],
  ];

  function verificarSeEstaFinalizado($projeto)
  {
    if ($projeto['concluido']) {
      return '<span style="color: green">✅ finalizado</span>';
    }
    // o que significa que se não retornar true ele automaticamente cai em false
    return '<span style="color: red">❌ não finalizado</span>';
  }

  function filtrarProjetos($listaDeProjetos, $finalizado = null)
  {
    // se eu não quero filtrar eu só retorno tudo
    if (is_null($finalizado)) {
      return $listaDeProjetos;
    }

    // se eu quero filtrar eu retorno aqui em baixo
    $filtrados = [];
    foreach ($listaDeProjetos as $projeto) {
      if ($projeto['concluido'] === $finalizado) {
        $filtrados[] = $projeto; // adição de elementos numa lista php
      }
    }

    return $filtrados;
  }

  ?>

  <h1><?= $titulo ?></h1>
  <h3><?= $subtitle ?></h3>
  <p><?= "Idade: " . $idade ?></p>
  <p><?= "Formação: " . $formacao ?></p>
  <p><?= "Habilidade: " . $stack ?></p>

  <hr>
  <ul>

    <?php foreach (filtrarProjetos($projetos, true) as $projeto): ?>

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
            <?= verificarSeEstaFinalizado($projeto); ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </ul>

</body>

</html>
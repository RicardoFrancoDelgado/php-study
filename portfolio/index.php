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
      "ano" => 2022,
      "descricao" => "Meu primeiro portfólio. Escrito em PHP e HTML."
    ],
    [
      "titulo" => "Lista de Tarefas",
      "concluido" => true,
      "ano" => 2023,
      "descricao" => "Lista de tarefas. Escrito em PHP e HTML."
    ],
    [
      "titulo" => "Controle de leitura de livros",
      "concluido" => false,
      "ano" => 2024,
      "descricao" => "Lista de Livros."
    ],
    [
      "titulo" => "Projeto não finalizado",
      "concluido" => false,
      "ano" => 2025,
      "descricao" => "Projeto em andamento"
    ],
    [
      "titulo" => "Medical Group",
      "concluido" => true,
      "ano" => 2026,
      "descricao" => "Projeto do VNW"
    ],
    [
      "titulo" => "Medical reminder",
      "concluido" => false,
      "ano" => 2026,
      "descricao" => "Projeto em Java"
    ],
  ];

  $livros = [
    ["nome" => "Senhor dos Anéis"],
    ["nome" => "Harry Potter"],
  ];

  function verificarSeEstaFinalizado($projeto)
  {
    if ($projeto['concluido']) {
      return '<span style="color: green">✅ finalizado</span>';
    }
    // o que significa que se não retornar true ele automaticamente cai em false
    return '<span style="color: red">❌ não finalizado</span>';
  }

  //? Dessa forma o filtro fica disponível para qualquer 
  //? É possível controlar o comportamento do filtro passando uma função anônima como parâmetro
  //? Essa função vai ser responsável por dizer que filtro ele vai fazer
  function filtro($itens, $funcao)
  {
    // se eu quero filtrar eu retorno aqui em baixo
    $filtrados = [];
    foreach ($itens as $item) {
      if ($funcao($item)) {
        $filtrados[] = $item; // adição de elementos numa lista php
      }
    }

    return $filtrados;
  }

  // o que permite armazenar em uma variável a função em si e seu retorno
  // passando os mesmos parâmetros
  // é possível sobrescrever as variaveis filtrando por ano também
  $projetosFiltrados = filtro($projetos, function ($projeto) {
    return $projeto['ano'] === 2025 || $projeto['ano'] === 2026;
  });


  // funções anônimas e refatoração
  // armazenar funções dentro de variáveis -> precisa terminar com ; pq é uma atribuição
  // ao passar uma fução para uma variável ela precisa de ; e também precisa de 
  // $ ao ser chamada
  //? exemplo de função anônima
  $anonFunc = function () {
    return "Função anônima";
  };


  ?>

  <h1><?= $titulo ?></h1>
  <h3><?= $subtitle ?></h3>
  <p><?= "Idade: " . $idade ?></p>
  <p><?= "Formação: " . $formacao ?></p>
  <p><?= "Habilidade: " . $stack ?></p>
  <p><?php echo $anonFunc() ?></p>

  <hr>
  <ul>
    <?php foreach (
      filtro($livros, function ($livro) {
        return $livro['nome'] === "Harry Potter";
      }) as $livro
    ): ?>
      <li><?= $livro['nome'] ?></li>
    <?php endforeach ?>
  </ul>

  <hr>

  <ul>

    <?php foreach ($projetosFiltrados as $projeto): ?>

      <div
        <?php if ((2019 - $projeto['ano']) < 2): ?>
        style="background-color: burlywood;"
        <?php endif; ?>>
        <h2><?= $projeto['titulo'] ?></h2>
        <p><?= $projeto['descricao'] ?></p>

        <div>
          <div><?= "Ano: " . $projeto['ano'] ?></div>
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
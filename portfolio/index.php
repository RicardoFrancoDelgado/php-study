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
      "descricao" => "Meu primeiro portfólio. Escrito em PHP e HTML.",
      "linguagem" => "PHP",
    ],
    [
      "titulo" => "Lista de Tarefas",
      "concluido" => true,
      "ano" => 2023,
      "descricao" => "Lista de tarefas. Escrito em PHP e HTML.",
      "linguagem" => "PHP",
    ],
    [
      "titulo" => "Controle de leitura de livros",
      "concluido" => false,
      "ano" => 2024,
      "descricao" => "Lista de Livros.",
      "linguagem" => "PHP",
    ],
    [
      "titulo" => "Projeto não finalizado",
      "concluido" => false,
      "ano" => 2025,
      "descricao" => "Projeto em andamento",
      "linguagem" => "PHP",
    ],
    [
      "titulo" => "Medical Group",
      "concluido" => true,
      "ano" => 2026,
      "descricao" => "Projeto do VNW",
      "linguagem" => "React",
    ],
    [
      "titulo" => "Medical reminder",
      "concluido" => false,
      "ano" => 2026,
      "descricao" => "Projeto em Java",
      "linguagem" => "Java",
    ],
  ];

  $livros = [
    ["nome" => "Senhor dos Anéis"],
    ["nome" => "Harry Potter"],
  ];

  //? Dessa forma o filtro fica disponível para qualquer 
  //? É possível controlar o comportamento do filtro passando uma função anônima como parâmetro
  //? Essa função vai ser responsável por dizer que filtro ele vai fazer

  // Em php o array_filter permite que façamos um filtro no nosso array, passando uma coleção e uma função de callback.
  // o que permite armazenar em uma variável a função em si e seu retorno
  // passando os mesmos parâmetros
  // é possível sobrescrever as variaveis filtrando por ano também

  // Então além de usar uma função do próprio php, separamos as regras e tornamos nosso código
  // mais legível e fácil de manutenção
  $projetosFiltrados = array_filter($projetos, function ($projeto) {
    return $projeto['ano'] <= 2027;
  });
  $projetosFiltrados = array_filter($projetosFiltrados, function ($projeto) {
    return $projeto['linguagem'] === "PHP";
  });


  // funções anônimas e refatoração
  // armazenar funções dentro de variáveis -> precisa terminar com ; pq é uma atribuição
  // ao passar uma fução para uma variável ela precisa de ; e também precisa de 
  // $ ao ser chamada
  //? exemplo de função anônima
  $anonFunc = function () {
    return "Função anônima";
  };

  //TODO: Identificar todos os códigos que possuem regras de negócios e separar as regras do que o usuário vê

  //* Filtro de livros
  $livrosFiltrados = array_filter($livros, function ($livro) {
    return $livro['nome'] === "Harry Potter";
  });

  //* Regra de negócio para projeto menor que o ano < 2
  $projetoAntigo = function ($projeto) {
    return (2019 - $projeto['ano'] < 2) ? 'style="background-color: burlywood"' : '';
  };

  //* Verificar se o projeto está finalizado
  $projetoFinalizado = function ($projeto) {
    if ($projeto['concluido']) {
      return '<span style="color: green">✅ finalizado</span>';
    }

    return '<span style="color: red">❌ não finalizado</span>';
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
    <?php foreach ($livrosFiltrados as $livro): ?>
      <li><?= $livro['nome'] ?></li>
    <?php endforeach ?>
  </ul>

  <hr>

  <ul>
    <?php foreach ($projetosFiltrados as $projeto): ?>
      <div <?= $projetoAntigo($projeto) ?>>
        <h2><?= $projeto['titulo'] ?></h2>
        <p><?= $projeto['descricao'] ?></p>
        <p><?= $projeto['linguagem'] ?></p>
        <div>
          <div><?= "Ano: " . $projeto['ano'] ?></div>
          <div>
            Projeto:
            <?= $projetoFinalizado($projeto); ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </ul>

</body>

</html>
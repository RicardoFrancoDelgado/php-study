<?php
$projetos = [
  [
    "titulo" => "Medication Reminder",
    "concluido" => true,
    "ano" => 2026,
    "descricao" => "Aplicação que avisa quando um remédio cadastrado precisa ser tomado, com a possibilidade de cadastrar novos remédios, tudo via Whatsapp.",
    "stack" => ["Java", "Spring Boot", "Twillio API", "PostgreSQL", "Flyway"],
    "img" => "../img/medication-reminder.png",
  ],
  [
    "titulo" => "Medicos e Dentistas",
    "concluido" => true,
    "ano" => 2025,
    "descricao" => "Desafio proposto nas aulas do curso ministrado pelo pessoal da vai na web, onde era necessario utilizar as tecnologias react, jsx, scss e react router dom.",
    "stack" => ["SCSS", "JavaScript", "React", "react-router-dom"],
    "img" => "../img/saude-project.png",
  ],
  [
    "titulo" => "Devbook API",
    "concluido" => true,
    "ano" => 2025,
    "descricao" => "API da aplicação devbook desenvolvida em conjunto no curso de fundamentos da linguagem Go, com o uso do MySQL, autenticação e boas práticas.",
    "stack" => ["JWT", "MySQL", "Go"],
    "img" => "../img/golang-banner.png",
  ],
  [
    "titulo" => "Sublee Linktree",
    "concluido" => true,
    "ano" => 2024,
    "descricao" => "Projeto desenvolvido para colocar em vinitre links de produtos de um E-commerce",
    "stack" => ["HTML", "CSS"],
    "img" => "../img/sublee-linktree.png",
  ],
];
?>

<?php foreach ($projetos as $projeto): ?>
  <div class="bg-slate-800 rounded-lg p-3 flex items-center space-x-3">
    <div class="w-1/5">
      <img src="<?= $projeto['img'] ?>" alt="<?= $projetos['alt'] ?>" class="h-30 rounded-md">
    </div>
    <div class="w-4/5 space-y-3">
      <div class="flex gap-3 justify-between">
        <h3 class="font-semibold text-xl">
          <?php if ($projeto['concluido']): ?>✅<?php endif; ?>
          <?= $projeto['titulo']; ?>
          <?php if ($projeto['concluido']): ?>
            <span class="text-sm text-gray-400 opacity-50 italic">(Finalizado em <?= $projeto['ano'] ?>)</span>
          <?php else: ?>
            <span class="text-sm text-gray-400 opacity-50 italic">(Em desenvolvimento)</span>
          <?php endif; ?>
        </h3>
        <div class="space-x-1">
          <?php
          $colors = ['fuchsia', 'lime', 'sky', 'rose', 'amber', 'teal', 'purple'];
          foreach ($projeto['stack'] as $position => $stackName) :
          ?>
            <span class="bg-<?= $colors[$position] ?>-500 text-<?= $colors[$position] ?>-900 rounded-md px-2 py-1 font-semibold text-xs">
              <?= $stackName ?>
            </span>
          <?php endforeach; ?>

        </div>
      </div>
      <p class="leading-6">
        <?= $projeto['descricao'] ?>
      </p>
    </div>
  </div>
<?php endforeach; ?>
<?php
$logoPresentation = "🦈 Ricardo Franco ...";

$itens = [
  ['href' => '#projetos', 'texto' => 'Projetos'],
  ['href' => 'https://github.com/RicardoFrancoDelgado', 'texto' => 'Github'],
  ['href' => 'https://linkedin.com/in/ricardofrancodelgado-dev', 'texto' => 'LinkedIn'],
  ['href' => 'https://youtube.com/@ricardiinn', 'texto' => 'Youtube'],
];
?>

<header
  class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">
  <!-- Logo -->
  <div class="font-bold text-xl text-cyan-600">
    <?= $logoPresentation ?>
  </div>

  <!-- Links -->
  <div class="">
    <ul class="flex items-center gap-3 font-medium">
      <?php foreach ($itens as $item): ?>
        <li>
          <a href=<?= $item['href'] ?> class="hover:underline " target="_blank">
            <?= $item['texto'] ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</header>
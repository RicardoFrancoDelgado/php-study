<?php
$mainTitle = 'Oi, meu nome é Ricardo!';
$description = '
      Falando um pouco sobre mim, sou um desenvolvedor de software que
      adora criar coisas novas e aprender novas tecnologias. Especializado
      em em Java e PHP, mas também tenho conhecimento em outras linguagens como
      TypeScript e Go.';

$links = [
  [
    'href' => 'https://x.com/ricardinous',
    'src' => './img/twitter.png',
    'alt' => 'icon twitter (X)'
  ],
  [
    'href' => 'https://github.com/RicardoFrancoDelgado',
    'src' => './img/github.png',
    'alt' => 'icon github (X)'
  ],
  [
    'href' => 'https://linkedin.com/in/ricardofrancodelgado-dev',
    'src' => './img/linkedin.png',
    'alt' => 'icon linkedin (X)'
  ],
  [
    'href' => 'https://youtube.com/@ricardiinn',
    'src' => './img/youtube.png',
    'alt' => 'icon youtube(X)'
  ],
];
?>

<section class="flex gap-x-3">
  <!--Titulo e Descrição-->
  <div class="w-2/3">
    <h1 class="text-3xl font-bold"><?= $mainTitle ?></h1>
    <p class="text-xl leading-6 mt-6"><?= $description ?></p>

    <!-- links de redes sociais -->
    <ul class="flex gap-3 mt-3">
      <?php foreach ($links as $link): ?>
        <li>
          <a href=<?= $link['href'] ?> target="_blank">
            <img
              class="h-8 hover:animate-bounce"
              src=<?= $link['src'] ?>
              alt=<?= $link['alt'] ?> />
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>

  <!--Imagem-->
  <div class="w-1/3 flex items-center justify-center">
    <div>
      <img class="h-60 -mt-3 rounded-3xl hover:animate-pulse" src="./img/photo-me.png" alt="foto de perfil" />
    </div>
  </div>
</section>
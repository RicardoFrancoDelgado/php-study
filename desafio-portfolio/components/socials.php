<?php
$title = "Contato";
$subtitle = "Gostou do meu trabalho ?";
$contact = "Entre em contato ou acompanhe as minhas redes sociais!";

$socials = [
  [
    'socialIcon' => './img/LinkedinLogo.png',
    'socialName' => 'LinkedIn',
    'socialLinkIcon' => './img/ArrowUpRight.png',
    'socialUrl' => 'https://linkedin.com/in/ricardofrancodelgado-dev',
  ],
  [
    'socialIcon' => './img/GithubLogo.png',
    'socialName' => 'GitHub',
    'socialLinkIcon' => './img/ArrowUpRight.png',
    'socialUrl' => 'https://github.com/RicardoFrancoDelgado',
  ],
  [
    'socialIcon' => './img/InstagramLogo.png',
    'socialName' => 'Instagram',
    'socialLinkIcon' => './img/ArrowUpRight.png',
    'socialUrl' => 'https://instagram.com/ricardinous',
  ],
  [
    'socialIcon' => './img/EnvelopeSimple.png',
    'socialName' => 'E-mail',
    'socialLinkIcon' => './img/ArrowUpRight.png',
    'socialUrl' => 'https://gmail.com.br',
  ],
]
?>
<!--Contatos-->
<section
  class="bg-[url('/img/bg-footer.png')] bg-cover bg-no-repeat h-screen w-full flex items-center justify-center flex-col">
  <div class="text-center space-y-4">
    <h2 class="text-purple-400 leading-6 font-asap text-2xl"><?= $title ?></h2>
    <p class="text-gray-100 font-asap text-3xl font-semibold">
      <?= $subtitle ?>
    </p>
    <p class="text-gray-100 text-2xl">
      <?= $contact ?>
    </p>
  </div>
  <div class="mt-12 space-y-4">
    <?php foreach ($socials as $social): ?>
      <div
        class="bg-gray-700 rounded-md flex items-center mx-auto max-w-screen-lg w-xl p-5">
        <div class="flex items-center flex-1 space-x-4">
          <img src="<?= $social['socialIcon'] ?>" alt="Linkedin logo icon" />
          <p class="text-gray-200"><?= $social['socialName'] ?></p>
        </div>
        <div class="">
          <a href="<?= $social['socialUrl'] ?>" target="_blank">
            <img src="<?= $social['socialLinkIcon'] ?>" alt="Icone de flecha para ir a rede social" />
          </a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
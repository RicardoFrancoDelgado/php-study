<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Inconsolata:wght@200..900&family=Maven+Pro:wght@400..900&display=swap"
    rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>Ricardo Franco</title>
  <style type="text/tailwindcss">
    @theme {
        --font-inconsolata: "Inconsolata";
        --font-asap: "Asap";
        --font-maven: "Maven Pro";
      }
    </style>
</head>

<body>
  <?php
  require 'components/hero.php';
  ?>

  <!--Projetos-->
  <section class="bg-[#16181d]">
    <!--title-->
    <div class="text-center space-y-4">
      <h2 class="text-red-400 font-inconsolata text-2xl">Meus Trabalhos</h2>
      <p class="text-gray-100 font-asap text-2xl font-semibold">
        Veja os projetos em destaque
      </p>
    </div>

    <!--project card-->
    <div class="grid grid-cols-2 gap-4 mx-auto max-w-screen-lg mt-14">
      <?php
      require 'components/projects.php';
      ?>

    </div>
  </section>

  <?php
  require 'components/socials.php';
  ?>

</body>

</html>
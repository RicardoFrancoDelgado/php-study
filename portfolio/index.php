<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>Ricardo Franco</title>
</head>

<body class="bg-slate-900 text-gray-200">
  <?php include('./components/header.php'); ?>

  <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">
    <!--HERO-->
    <?php include('./components/hero.php'); ?>

    <!--Projetos-->
    <section class="space-y-3 py-6" id="projetos">
      <h2 class="text-2xl font-bold">Projetos Recentes</h2>
      <!--Projeto-->
      <?php include('./components/projects.php'); ?>

    </section>
  </main>

  <!-- Footer -->
  <footer class="h-20 mx-auto max-w-screen-lg">
    <!-- Data -->
    <div class="border-t border-gray-600 pt-3 px-3 text-gray-400 text-sm">
      &copy; Copyright <?= date('Y') ?>, Construído <3 por mim mesmo :) .
        </div>

        <!-- Links -->
        <div></div>
  </footer>
</body>

</html>
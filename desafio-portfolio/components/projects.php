<?php
$projetos = [
  [
    'img' => '',
    'title' => 'Travelgram',
    'description' => 'Rede social onde as pessoas mostram os registros de suas viagens
            pelo mundo',
    'stacks' => ['PHP', 'HTML', 'CSS', 'Tailwind']
  ],
  [
    'img' => '',
    'title' => 'Travelgram',
    'description' => 'Rede social onde as pessoas mostram os registros de suas viagens
            pelo mundo',
    'stacks' => ['PHP', 'HTML', 'CSS', 'Tailwind']
  ],
  [
    'img' => '',
    'title' => 'Travelgram',
    'description' => 'Rede social onde as pessoas mostram os registros de suas viagens
            pelo mundo',
    'stacks' => ['PHP', 'HTML', 'CSS', 'Tailwind']
  ],
  [
    'img' => '',
    'title' => 'Travelgram',
    'description' => 'Rede social onde as pessoas mostram os registros de suas viagens
            pelo mundo',
    'stacks' => ['PHP', 'HTML', 'CSS', 'Tailwind']
  ],
  [
    'img' => '',
    'title' => 'Travelgram',
    'description' => 'Rede social onde as pessoas mostram os registros de suas viagens
            pelo mundo',
    'stacks' => ['PHP', 'HTML', 'CSS', 'Tailwind']
  ],
  [
    'img' => '',
    'title' => 'Travelgram',
    'description' => 'Rede social onde as pessoas mostram os registros de suas viagens
            pelo mundo',
    'stacks' => ['PHP', 'HTML', 'CSS', 'Tailwind']
  ],
];

?>
<!--card-->
<?php foreach ($projetos as $projeto): ?>
  <div
    class="flex items-center bg-gray-800 rounded-xl flex space-x-3 p-4">
    <div>
      <img
        src="./img/travelgram.png"
        alt="projeto travelgram"
        class="rounded-md" />
    </div>
    <div class="space-y-4">
      <h3 class="text-gray-100 text-md"><?= $projeto['title'] ?></h3>
      <p class="text-gray-100 text-sm"><?= $projeto['description'] ?></p>

      <ul class="flex items-center space-x-4 text-white">
        <?php
        $colors = ['green', 'purple', 'red', 'sky', 'yellow', 'orange'];
        foreach ($projeto['stacks'] as $position => $stack): ?>
          <li
            class="p-1 bg-<?= $colors[$position] ?>-600 rounded-xl text-gray-950 text-sm font-semibold">
            <?= $stack ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
<?php endforeach; ?>
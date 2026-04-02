<?php
// parâmetro = null numa função indica que ela é opcional
function view($view, $data = null)
{

  // duplo sinal de dolar e a variavel -> criando uma variável nova com nome de livros e ela vai receber os dados  
  foreach ($data as $key => $value) {
    // dd($key, $value);
    $$key = $value;
  }
  require "views/template/app.php";
}

function dd(...$dump)
{
  echo "<pre>";
  var_dump($dump);
  echo "</pre>";
  die();
}

function abort($status)
{
  http_response_code($status);
  view($status);
  die();
}

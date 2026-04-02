<?php
function view($view)
{
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

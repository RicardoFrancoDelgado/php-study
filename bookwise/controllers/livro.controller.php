<?php
// livros pesquisa e filtrar
// carregando o model: converter pra db
require 'dados.php';

$id = $_REQUEST['id']; // variável super global

$filtrado = array_filter($livros, fn($livro) =>  $livro['id'] == $id);

$livro = array_pop($filtrado);

view('livro');

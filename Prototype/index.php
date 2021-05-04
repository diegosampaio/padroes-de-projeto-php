<?php
require_once('../autoloader.php');

$compradores = [
  'Diego Sampaio',
  'Davi Sampaio',
  'Malu Sampaio'
];

$livroPhp = new \Prototype\LivroPhpPrototype();
$livroPhp->setTitulo('Padrões de Projeto - PHP 7.4');

$livros = [];

foreach ($compradores as $nomeComprador) {
  $livroComprador = clone $livroPhp;
  $livroComprador->setNomeTitular($nomeComprador);

  $livros[] = $livroComprador;
}

echo '<pre>';
var_dump($livros);
echo '</pre>';

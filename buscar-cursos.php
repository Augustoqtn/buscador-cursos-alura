<?php

require "vendor/autoload.php";

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(["base_uri" => "https://www.alura.com.br/"]);

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar("cursos-online-programacao/php");

foreach ($cursos as $curso) {
    echo $curso->textContent . PHP_EOL;
}
#4:22
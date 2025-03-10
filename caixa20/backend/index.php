<?php
// index.php

// Carrega as rotas
$routes = require 'routes/web.php';


$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Verifica se a rota existe
if (array_key_exists($requestUri, $routes)) {
    $page = $routes[$requestUri];
} else {
    $page = '404'; // Página não encontrada
}


$htmlFile = "html/{$page}.html";

// Verifica se o arquivo existe
if (file_exists($htmlFile)) {
    include($htmlFile);
} else {
    echo "<h1>Página não encontrada!</h1>";
}
?>


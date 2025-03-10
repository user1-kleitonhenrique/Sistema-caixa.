<?php
// routes.php

$routes = [
    "" => "views/home.php",   // Rota padrão
    "login" => "views/login.php",
];

// Obtém a URL solicitada
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';

// Verifica se a rota existe, senão exibe erro 404
if (array_key_exists($url, $routes)) {
    require $routes[$url];
} else {
    echo "<h1>404 - Página não encontrada</h1>";
}

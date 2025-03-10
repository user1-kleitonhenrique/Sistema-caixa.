<?php

$request = isset($argv[1]) ? $argv[1] : "/";

function loadPage($page){
    $filePath = "views/$page.html";

    if(file_exists($filePath)){
        include($filePath);
    } else {
        echo "<h1>404 - Página não encontrada </h1>";
    }
}

switch ($request) {
    case "/":
    case "/home":
        loadPage('home');
        break;
    case "/login":
        loadPage('login');
        break;
    default:
        echo "<h1>404 - Página não encontrada </h1>";
        break;
}
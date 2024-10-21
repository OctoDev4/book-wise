<?php

function loadController()
{
    // Obtém a URI e analisa a URL
    $parsedUrl = parse_url($_SERVER['REQUEST_URI']);

    // Remove a barra e obtém o caminho da URL
    $controller = str_replace('/', '', $parsedUrl['path']);

    // Define 'index' como controlador padrão se não houver
    if (!$controller) {
        $controller = 'index';
    }

    // Verifica se o arquivo do controlador existe
    if (!file_exists("controllers/{$controller}.controller.php")) {
        http_response_code(404);
        echo 'page not found';
        die();
    }

    // Inclui o controlador
    require "controllers/{$controller}.controller.php";
}

loadController();

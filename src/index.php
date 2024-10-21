<?php 

// Controlador padrão
$controller = "index";

// Captura a URI solicitada
$requestUri = $_SERVER['REQUEST_URI'];

// Remove a parte da query string, se existir
$requestUri = strtok($requestUri, '?');

// Remove a barra inicial
$requestUri = ltrim($requestUri, '/');

// Se a URI não estiver vazia, usa como controlador
if (!empty($requestUri)) {
    $controller = $requestUri; // Define o controlador
}

// Inclui o controlador
require "controllers/{$controller}.controller.php"; 
?>

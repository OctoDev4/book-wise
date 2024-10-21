<?php

require 'data.php'; // Carrega seus dados uma única vez

$id = $_REQUEST['id'];

$bookFilter = array_filter($books, fn($data) => $data['id'] == $id);
$book = array_pop($bookFilter);

if (!$book) {
    $errorMessage = "Livro não encontrado.";
}

$view = "book"; // Define a view a ser carregada
require_once "views/template/app.php"; // Carrega o template
?>

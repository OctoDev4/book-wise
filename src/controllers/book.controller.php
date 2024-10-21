<?php 

require 'data.php'; // Carrega seus dados

$id = $_REQUEST['id'];
$bookFilter = array_filter($books, fn($data) => $data['id'] == $id);
$book = array_pop($bookFilter);

$view = "book"; // Define a view a ser carregada
require "views/template/app.php"; // Carrega o template
?>

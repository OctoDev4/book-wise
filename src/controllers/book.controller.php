<?php

require 'data.php'; // Carrega seus dados uma única vez

$id = $_REQUEST['id'];

$bookFilter = array_filter($books, fn($data) => $data['id'] == $id);
$book = array_pop($bookFilter);

if (!$book) {
    $errorMessage = "Livro não encontrado.";
}


// Usando compact para passar a variável $book para a view
view('book', compact('book')); // se o nome da variavel for igual ao que vc quer chamar pode usar o compact


//[
 //   'book' => $book // O valor de $book é o conteúdo da variável
//]

   //corresponde a isso
?>

<?php


$id = $_REQUEST['id'];
$db = new DB();
$book = $db->getBookById($id);




// Usando compact para passar a variável $book para a view
view('book', compact('book')); // se o nome da variavel for igual ao que vc quer chamar pode usar o compact

?>
    
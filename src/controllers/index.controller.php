<?php 

require 'data.php'; // Carrega seus dados

view('index',[
    'books'=>$books
]);
?>

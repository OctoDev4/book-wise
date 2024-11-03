<?php 


$db = new DB();


$books = $db->books();

view('index',[
    'books'=>$books
]);
?>

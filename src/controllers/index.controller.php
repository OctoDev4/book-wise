<?php 


$db = new DB();


$books = $db->books($_REQUEST['search'] ?? '');

view('index',[
    'books'=>$books
]);
?>

<?php 

require 'data.php';



$id = $_REQUEST['id'];
$bookFilter =  array_filter($books , fn($data)=>$data['id'] == $id);



$book = array_pop($bookFilter); 


$view = "book";

require "views/template/app.php";

?>







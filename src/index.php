<?php

require 'data.php';

$uri  = $_SERVER['REQUEST_URI'];
$uriSemBarra = str_replace('/','',$uri);

var_dump($uri , $uriSemBarra);



$view = "index";

 require "views/template/app.php";
?>









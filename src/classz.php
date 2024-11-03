<?php

class Tellphone
{
    public $size;
    public $color;
}

$phone = new Tellphone();
$phone->size = 'small';
$phone->color = 'black';

// Usando var_dump() para exibir o objeto
var_dump($phone);

?>

<?php

//se tiver null ou array ou objeto vazio, eh opcional 
function view($view,$data = []) {



   foreach($data as $key =>$value){
      $$key = $value;
   }



    // Inclui o template principal, passando o nome da view o parametro precisa ter o msm nome que no app.php
    require "views/template/app.php"; 
}

function dd(...$dump) {
    // Exibe variáveis para depuração
    echo '<pre>';
    var_dump($dump);
    echo '</pre>';
    die(); // Para a execução do script
}

function abort($code) {
    // Define o código de status HTTP
    http_response_code($code); 
    view($code); // Chama a função view com o código como nome da view
    die(); // Para a execução do script
}
?>

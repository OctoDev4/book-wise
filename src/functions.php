<?php

//se tiver null ou array ou objeto vazio, eh opcional 
/**
 * Renders a view with the provided data.
 *
 * @param string $view The name of the view to be rendered.
 * @param array $data An associative array of data to be extracted and made available to the view.
 *
 * @return void
 */
function view($view, $data = []) {



   foreach($data as $key =>$value){
      $$key = $value;
   }



    // Inclui o template principal, passando o nome da view o parametro precisa ter o msm nome que no app.php
    require "views/template/app.php"; 
}

/**
 * Dumps the given variables for debugging purposes and terminates the script execution.
 *
 * @param mixed ...$dump Variables to be dumped
 * @return void
 */
function dd(...$dump) {
    // Exibe variáveis para depuração
    echo '<pre>';
    var_dump($dump);
    echo '</pre>';
    die(); // Para a execução do script
}

/**
 * Ends the execution of the script with a given HTTP status code.
 *
 * @param int $code The HTTP status code to be set.
 * @return void No return value.
 */
function abort($code) {
    // Define o código de status HTTP
    http_response_code($code); 
    view($code); // Chama a função view com o código como nome da view
    die(); // Para a execução do script
}
?>

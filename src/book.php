<?php 

require 'data.php';



$id = $_REQUEST['id'];
$bookFilter =  array_filter($books , fn($data)=>$data['id'] == $id);
$book = array_pop($bookFilter); 


?>






<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="input.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-stone-950  text-stone-200">


 <header class="bg-stone-900">

     <nav class="mx-auto max-w-screen-lg flex justify-between px-8 py-4">
         <div class="font-bold text-xl tracking-wide">BookWise</div>

         <ul class="flex space-x-6 font-bold">
             <li><a href="/" class="text-lime-600 ">Explorar</a></li>
             <li><a href="/my-books.php" class="hover:underline">meus livros</a></li>
        
         </ul>

         <ul>
             <li><a href="/login.php" class="hover:underline">Fazer Login</a></li>
         </ul>


     </nav>
 </header>


<main class="mx-auto max-w-screen-lg space-y-10 mt-10">

<article class="p-6 rounded bg-stone-900 border-stone-800 border-2 ">
      <div class="flex p-3">
    <figure class="w-1/3">imagem</figure>
    
    
    <header class="p-1">
    
     <h2 class="font-semibold"><a href="book.php?id=<?=$book['id']?>" class="hover:underline"><?=$book['title']?></a></h2>
     <p class="text-xs italic"><?=$book['author']?></p>
     <p class="text-xs italic"> ⭐⭐⭐⭐⭐ (3 avaliacoes)</p>
    
    </header>
</div>
 

 <div class="text-sm mt-4">
 <?=$book['description']?>
 </div>

 </article>


</main>

</body>
</html>
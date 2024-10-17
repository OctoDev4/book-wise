<?php

require 'data.php';





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


<main class="mx-auto max-w-screen-lg space-y-10">


<h1 class="mt-6 font-bold text">Explorar</h1>

  <form action="" class="w-full flex space-x-2">
    <input 
    name="search"
    placeholder="Pesquisar..."
    type="text" 
    class="border-stone-800 bg-stone-900 text-sm border-2 rounded-md text-sm focus:outline-none px-2 py-1 w-full">
    <button type="submit">🔎</button>
  </form>



 <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 ">

   <!--books -->

   <?php foreach($books as $book): ?>
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


 <?php endforeach; ?>

 </section>

</main>

</body>
</html>
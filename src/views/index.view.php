<form action="" class="w-full flex space-x-2">
    <input 
    name="search"
    placeholder="Pesquisar..."
    type="text" 
    class="border-stone-800 bg-stone-900 text-sm border-2 rounded-md text-sm focus:outline-none px-2 py-1 w-full">
    <button type="submit">🔎</button>
  </form>



 <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 ">


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
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
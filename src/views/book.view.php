<div class="min-h-screen">
    <?php if (isset($errorMessage)): ?>
        <article class="p-6 rounded bg-red-900 border-red-800 border-2">
            <h2 class="text-white"><?= $errorMessage ?></h2>
        </article>



    <?php else: ?>
        <article class="p-6 rounded bg-stone-900 border-stone-800 border-2">
            <div class="flex p-3">
                <figure class="w-1/3">
                    <img src="<?=$book->id ?>" alt="<?= $book->title ?>">
                </figure>
                <header class="p-1">
                    <h2 class="font-semibold"><?=$book->title ?></h2>
                    <p class="text-xs italic"><?=$book->author?></p>
                    <p class="text-xs italic">⭐⭐⭐⭐⭐ (3 avaliações)</p>
                </header>
            </div>

            <div class="text-sm mt-4">
                <?= $book->description ?>
            </div>
        </article>
    <?php endif; ?>
</div>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="input.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-stone-950 text-stone-200">
<header class="bg-stone-900">
    <nav class="mx-auto max-w-screen-lg flex justify-between px-8 py-4">
        <div class="font-bold text-xl tracking-wide">BookWise</div>
        <ul class="flex space-x-6 font-bold">
            <li><a href="/" class="text-lime-600">Explorar</a></li>
            <li><a href="/my-books.php" class="hover:underline">meus livros</a></li>
        </ul>
        <ul>
            <li><a href="/login.php" class="hover:underline">Fazer Login</a></li>
        </ul>
    </nav>
</header>
<main class="mx-auto max-w-screen-lg max-h-full space-y-10 mt-10">
    <?php require "views/{$view}.view.php" ?>
</main>
</body>
</html>

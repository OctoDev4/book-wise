<?php

class Book
{
    public $id;
    public $title;
    public $author;
    public $description;
}

class DB
{
    public function books()
    {
        $db = new PDO('sqlite:database.sqlite');
        $query = $db->query("SELECT * FROM books");

        $items = $query->fetchAll();

        $returnToBook = [];

        foreach ($items as $item) {
            $book = new Book();
            $book->id = $item['id'];
            $book->title = $item['title'];
            $book->author = $item['author'];
            $book->description = $item['description'];

            $returnToBook[] = $book;
        }

        return $returnToBook;
    }
}
?>

<?php


/**
 * The DB class handles database operations.
 */
class DB

{

    private $db;


    public function __construct(){

        $this->db = new PDO('sqlite:database.sqlite');

    }

    public function books($search = null)
    {


       $sql = "SELECT * FROM books WHERE title LIKE '%$search%' OR author LIKE '%$search%' OR description LIKE '%$search%'";


       $query = $this->db->query($sql);

        $items = $query->fetchAll();

        return array_map(fn($item)=>Book::make($item), $items);

    }


    public function getBookById($id)
    {

       $sql = "SELECT * FROM books";

       $sql .= " WHERE id =" .$id;


        $query = $this->db->query($sql);

       $items = $query->fetchAll();

       $returnToBook = [];



        foreach ($items as $item) {
            $book = Book::make($item);

            $returnToBook[] = $book;
        }
        return $returnToBook[0];
    }
}
?>

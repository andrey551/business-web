<?php
require "..Book.php";
class Collection {
    private $Books ;

    function __constructor() {
        $Books = (object)[];
    }

    function addBook($book) {
        $Books[count($this->Books) + 1] = $book;
    }

    function getCount($var) {
        $count = 0;
        if (is_array($var) || is_object($var)) {
            foreach ($var as $Books) {
                $count++;
            }
        }
        unset($value);
        return $count;
    }

    function getBookColelction() {
        return $this->Books;
    }

    function getBookById($id) {
        foreach($this->Books as $var) {
            if($var->checkBookById($id)) return $var;
        }
        
        return;
    }
}
?>
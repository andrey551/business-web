<?php
class Book {
    private $id;
    private $title;
    private $subtitle;
    private $author;
    private $published;
    private $publisher;
    private $pages;
    private $description;
    private $website;
    private $img;
    private $price;

    function __constructor($id,$title,$subtitle,
                            $author,$published,$publisher,
                            $pages,$description,$website,
                            $img,$price,) {
        $this->id= $id;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->author = $author;
        $this->published = $published;
        $this->publisher = $publisher;
        $this->pages = $pages;
        $this->description = $description;
        $this->website = $website;
        $this->img = $img;
        $this->price = $price;
    }

    function checkBookById($id) {
        if($this->id === $id) return true;
        return false;
    } 

    function get_book() {
        return this;
    }
}
?>
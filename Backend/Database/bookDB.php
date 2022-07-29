<?php
require "./Collection/CurrentBookCollection.php";

class bookDB {
    private $connection;

    function __constructor($conn) {
        $this->connection = $conn;
    }
}
?>
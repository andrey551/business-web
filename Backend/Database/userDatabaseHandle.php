<?php
require "User.php";
class userDatabaseHandle{
private $connection;
function __constructor($connection) {
    $this->connection = $connection;
}

function addUser($username, $password) {
    if($this->connection == false) {
        die("ERROR: could not connect. " . mysqli_connect_error());
    }

    $sql = "INSERT INTO user(username, password)
    VALUES ('".$username."', '".$password."')";
    if($this->connection->query($sql) === TRUE) {
        echo " Added user to database";
    } else {
        echo "Error: " .$sql. "<br>" . $this->connection->error;
    }
}

function checkUser($username, $password) {
    if($this->connection == false) {
        die("ERROR: could not connect. " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM user WHERE 
    username='".$username."'AND PASSWORD='".$password."')";
    $res =  $this->connection->query($sql);
    if($res->num_rows > 0) {
        return true;
    } 
    return false;
}

function updateUser($user) {
    if($this->connection == false) {
        die("ERROR: could not connect. " . mysqli_connect_error());
    }
    $id = $user->get_id();
    $username = $user->get_username();
    $password = $user->get_password();

    $sql = "UPDATE user SET username='".$username."', password='".$password."' WHERE id =".$id;

    if($this->connection->query($sql) === TRUE) {
        echo " update user to database successful";
    } else {
        echo "Error: " .$sql. "<br>" . $this->connection->error;
    }
}

}
?>
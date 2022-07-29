<?php
class User {
    private $username;
    private $password;
    private $id;

    function __construct($id,$username, $password) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }

    public function get_id() {
        return $this->id;
    }

    protected function get_username() {
        return $this->username;
    } 

    protected function get_password() {
        return $this->password;
    }
}
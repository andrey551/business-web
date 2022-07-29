<?php
require "Payment.php";
class UserDetail {
    private $userId;
    private $fullname;
    private $email;
    private $address;
    private $city;
    private $state;
    private $zip;
    private $payment;

    function __constructor($userId, $fullname, $email,
                            $address, $city, $state, $zip, $payment) {
        $this->userId = $userId;
        $this->fullname = $fullname;
        $this->email = $email;
        $this->address = $address;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
        $this->payment = $payment;                            
    }
}
?>
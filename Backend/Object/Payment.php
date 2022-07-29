<?php
class Payment{
    private $nameOnCard;
    private $creditCardNumber;
    private $expMonth;
    private $expYear;
    private $CVV;


    function __constructor($nameOnCard, $creditCardNumber,
                            $expMonth, $expYear, $CVV) {
        $this->nameOnCard = $nameOnCard;
        $this->creditCardNumber = $creditCardNumber;
        $this->expMonth = $expMonth;
        $this->expYear = $expYear;
        $this->CVV = $CVV;
    }
}
?>
<?php

class CreditCard {

    public $Number;
    public $ExpiryDate;
    public $Owner;
    public $CVV;

    function __construct($_number, $_expiryDate, $_owner, $_CVV){
        $this->number = $_number;
        $this->expiryDate = $_expiryDate;
        $this->owner = $_owner;
        $this->CVV = $_CVV;
    }

}

?>
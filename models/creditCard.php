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

    public function isValid(){
        //check sulla data di scadenza
        return true;
    }

    public function porceedPayment($price){
        $success = true;
        try{
            
            //interrogazione su una API di transazioni monetarie per $price
        }catch(Exception $e){
            
            //in caso di errore
            $success = false;
        }
        return $success;
    }
}

?>
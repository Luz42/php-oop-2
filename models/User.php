<?php

    require_once __DIR__ . './creditCard.php';

    class User{

        public $email;
        public $address = '';

        public $creditCard;

        public $cart = [];

        public function addProduct($product){
            $this->cart[] = $product;
        }

        public function checkOut(){
            $totalPrice = 0;
            $totalVat = 0;
            foreach($this->cart as $product){
                $totalPrice += $product->price;
                $totalVat += ($product->price * $product->vat / 100);
            }

            return [
                "total" => $totalPrice,
                "vat" => $totalVat,
                "finalPrice" => $totalPrice + $totalVat
            ];
        }

        public function addCreditCard($_number, $_expiryDate, $_owner, $_CVV){
            $this->creditCard = new CreditCard($_number, $_expiryDate, $_owner, $_CVV);
        }

        public function pay(){
            if($this->creditCard->isValid()){
                $price = $this->checkOut();
                if($this->creditCard->proceedPayment($price['finalPrice'])){
                    $this->cart = [];
                    //invia una mail con ricevuta/fattura
                }
            }
        }
    }
?>
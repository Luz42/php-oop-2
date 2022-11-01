<?php

    class User{

        public $name;
        public $surname;

        public $email;
        public $creditCardNumber;
        public $creditCardExpiryDate;
        public $creditCardOwner;
        public $creditCardCVV;

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
    }
?>
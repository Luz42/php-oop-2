<?php

class Product {

    public $price = 0;
    public $vat = 22;

    public $brand;
    public $name;

    public $description = '';
    public $category;

    function __construct($_brand, $_name, $_price){
        $this->brand = $_brand;
        $this->name = $_name;
        $this->price = $_price;
    }


};

?>
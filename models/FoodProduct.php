<?php

require_once __DIR__ . './Product.php';

class FoodProduct extends Product{

    public $category = 'Food';
    public $expire_date = ''; // date('Y-M-D');

    public $type = 'umido'; //umido | secco;

    public $weight = 0;

    public $ingredients = [];

    public $petWeight = 0;



    // SE SI VOLESSE ESTRAPOLARE LA DATA ODIERNA
    
    // function __construct($_brand, $_name, $_price){
    //     parent::__construct($_brand, $_name, $_price);
    //     $this->getCurrentYear();
    // }

    // public function getCurrentYear()
    // {
    //     $this->expire_date = date("Y-M-D");
    // }


}

?>
<?php

class food extends product {

    private static $type = 'food';

    private $target;
    private $company_name;
    private $comapny_address;
    private $expiration_date;

    //costruttore
    public function __construct($title, $img, $price, $target, $expiration_date, $comapny_address,$company_name) {

        $this -> setTitle($title);
        $this -> setImg($img);
        $this -> setPrice($price);
        $this -> setTarget($target);
        $this -> setExdate($expiration_date);
        $this -> setCompAdd($comapny_address);
        $this -> setCompName($company_name);
    }

    //funzioni set


    public function setTarget($target) {
        //controllo errori
        if(!is_string($target)) throw new Exception("Invalid target class(food)");

        $this ->target = $target;
    }
    public function setExdate($expiration_date) {
        $this -> expiration_date = $expiration_date;
    }
    public function setCompAdd($comapny_address) {
        $this -> comapny_address = $comapny_address;
    }
    public function setCompName($company_name) {
        $this -> company_name = $company_name;
    }

    //funzioni get 

    public function getTarget() {
        return $this -> target;
    }
    public function getExDate() {
        return $this -> expiration_date;
    }
    public function getCompAdd() {
        return $this -> comapny_address;
    }
    public function getCompName() {
        return $this -> company_name;
    }
    public function getTypology() {

        return self :: $type;
    }

}

?>
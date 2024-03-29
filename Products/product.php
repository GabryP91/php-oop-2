<?php

class product{
    private $title;
    private $img;
    private $price;

    //costruttore
    public function __construct($title, $img, $price) {

        $this -> setTitle($title);
        $this -> setImg($img);
        $this -> setPrice($price);
    }

    // funzioni set
    public function setTitle($title) {

        //controllo sul dato titolo
        if(!is_string($title) || strlen($title) < 3) throw new Exception("Invalid Username class(product)");
        
        $this -> title = $title;
    }
    public function setImg($img) {
        $this ->img = $img;
    }

    public function setPrice($price) {

        //controllo sul dato titolo
        if(!is_string($price)  < 0) throw new Exception("Invalid price class(product)");

        $this -> price = $price;
    }

    //funzioni get  
    public function getTitle() {

            return $this -> title;
    }

    public function getImg() {

        return $this -> img;
    }

    public function getPrice() {

    return $this -> price;
    }

}

?>
<?php

class Product {
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this -> setName($name);
        $this -> setPrice($price);
    }

    public function getName() {
        return $this -> name;
    }
    public function setName($name) {
        if (strlen($name) < 1) {
            throw new Exception("Il nome non può essere vuoto");
        }

        $this -> name = $name;
    }
    
    public function getPrice() {
        return $this -> price;
    }
    public function setPrice($price) {
        if ($price < 0) {
            throw new Exception("Il prezzo non può essere inferiore allo 0");
        }

        $this -> price = $price;
    }
}
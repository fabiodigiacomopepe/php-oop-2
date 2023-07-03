<?php

class AnimalType extends Product {
    private $category;
    private ProductType $product_type;

    public function __construct(
            $name, $price,
            $category, ProductType $product_type
        ) {
        parent :: __construct($name, $price);
        
        $this -> setCategory($category);
        $this -> setProductType($product_type);
    }

    public function getCategory() {
        return $this -> category;
    }
    public function setCategory($category) {
        $this -> category = $category;
    }

    public function getProductType() {
        return $this -> product_type;
    }
    public function setProductType($product_type) {
        $this -> product_type = $product_type;
    }
}
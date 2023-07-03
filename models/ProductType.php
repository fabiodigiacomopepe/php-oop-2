<?php

class ProductType {
    private $type;
    private $image;
    private $categoryIcon;

    public function __construct($type, $image, $categoryIcon) {
        $this -> setType($type);
        $this -> setImage($image);
        $this -> setCategoryIcon($categoryIcon);
    }

    public function getType() {
        return $this -> type;
    }
    public function setType($type) {
        $this -> type = $type;
    }

    public function getImage() {
        return $this -> image;
    }
    public function setImage($image) {
        $this -> image = $image;
    }

    public function getCategoryIcon() {
        return $this -> categoryIcon;
    }
    public function setCategoryIcon($categoryIcon) {
        $this -> categoryIcon = $categoryIcon;
    }
}
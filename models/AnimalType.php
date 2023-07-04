<?php

class AnimalType {
    private $category;
    private $categoryIcon;

    public function __construct($category, $categoryIcon) {
        $this -> setCategory($category);
        $this -> setCategoryIcon($categoryIcon);
    }

    public function getCategory() {
        return $this -> category;
    }
    public function setCategory($category) {
        $this -> category = $category;
    }

    public function getCategoryIcon() {
        return $this -> categoryIcon;
    }
    public function setCategoryIcon($categoryIcon) {
        $this -> categoryIcon = $categoryIcon;
    }
}
<?php

class ProductType extends Product {
    use Color;

    private $type;
    private $image;
    private AnimalType $animal_type;

    public function __construct(
        $name, $price,
        $type, $image, AnimalType $animal_type,
        $color
        ) {
        parent :: __construct($name, $price);

        $this -> setType($type);
        $this -> setImage($image);
        $this -> setAnimalType($animal_type);

        $this -> setColor($color);
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

    public function getAnimalType() {
        return $this -> animal_type;
    }
    public function setAnimalType($animal_type) {
        $this -> animal_type = $animal_type;
    }
}
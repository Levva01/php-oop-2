<?php

class Product {
    public $name;
    public $price;
    public $quantity;
    public $animal_type;

    public function __construct(string $_name, string $_price, string $_quantity, string $animal_type)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->quantity = $_quantity;
        $this->animal_type = $_animal_type;
        
    }
}

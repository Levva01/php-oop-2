<?php

require_once __DIR__ . '/Product.php'

class Toy extends Product {
    public $type;
    public $size;

    public function __construct(string $_name, float $_price, int $_quantity, string $_animal_type, string $_type, string $_size){

        parent::__construct($_name, $_price, $_quantity, $_animal_type);

        $this->type = $_type;
        $this->size = $_size;

    }
}
<?php

require_once __DIR__ . '/Product.php'

class Food extends Product {
    public $type;
    public $expire_date;

    public function __construct(string $_name, float $_price, int $_quantity, string $animal_type, string $type, string $expire_date){

        parent::__construct($_name, $_price, $_quantity, $_animal_type);

        $this->type = $_type;
        $this->expire_date = $_expire_date;
        

    }
}
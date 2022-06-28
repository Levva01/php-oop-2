<?php

require_once __DIR__ . '/CreditCard.php'

class User {
    public $name;
    public $surname;
    public $email;
    public $discount = 0;
    public $credit_card;


    public function __construct(string $_name, string $_surname, string $_email, int $_discount, $_credit_card){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->discount = $_discount;
        $this->credit_card = $_credit_card;
    }



/*
    public function setCreditCard(Object $_credit_card){
        $this->credit_card = $_credit_card;
    }

    public function getCreditCard(){
        return $this->credit_card;
    }

*/



}
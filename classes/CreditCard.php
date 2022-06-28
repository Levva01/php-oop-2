<?php

class CreditCard {
    public $number;
    public $expire_date;
    public $brand;
    public $name;
    public $surname;
    public $cvc;

    public function __construct(int $_number, string $_expire_date, string $_brand, string $_name, string $_surname, int $_cvc){
        $this->number = $_number;
        $this->expire_date = $_expire_date;
        $this->brand = $_brand;
        $this->name = $_name;
        $this->surname = $_surname;
        $this->cvc = $_cvc;
    }


    public function isExpired($creditCardData){

        $flag = false;

        if(intval(substr($creditCardData, -4)) >=  intval(date("Y")) && intval(substr($creditCardData, -7, 2)) >=  intval(date("m")) && intval(substr($creditCardData, -10, 2)) >  intval(date("d"))){
            $flag = true;
        }

        return $flag;
    }
}
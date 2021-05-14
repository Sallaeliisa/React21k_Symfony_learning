<?php


namespace App;


use function Symfony\Component\String\b;

class Account
{
    private $balance;
    private $id;

    public function __construct($balance, $id){
        $this->balance = $balance;
        $this->id = $id;
    }
    public function getBalance(){
        return $this->balance;
    }

    public function getId(){
        return $this->id;
    }

    public function deposit($depositAmount){
        if ($depositAmount > 0){
            $this->balance = $this->balance + $depositAmount;
        }
        return $this->balance;
    }

    public function withdraw($withdrawAmount){
        if ($withdrawAmount > 0 && $withdrawAmount < $this->balance) {
            $this->balance = $this->balance - $withdrawAmount;
        }
        return $this->balance;
    }
}
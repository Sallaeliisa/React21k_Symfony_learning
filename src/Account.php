<?php


namespace App;


use App\Utils\BankAccountInterface;
use function Symfony\Component\String\b;

class Account implements BankAccountInterface
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

    public function setBalance(int $amount) {
    $this->balance = $amount;
}

    public function getId(){
        return $this->id;
    }

    public function deposit(int $amount): void
    {
        if ($amount > 0) {
            $newAmount = $this->getBalance() + $amount;
            $this->setBalance($newAmount);
        }
    }

    public function withdraw(int $amount): bool
    {
        if ($amount > 0 && $amount < $this->getBalance()) {
            $newAmount = $this->getBalance() - $amount;
            $this->setBalance($newAmount);
            return true;
        } else {
            return false;
        }
    }
}



    /**public function deposit($depositAmount){
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
}*/

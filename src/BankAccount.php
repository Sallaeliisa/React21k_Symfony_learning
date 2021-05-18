<?php


namespace App;


class BankAccount
{
    private $balance;
    private $key;

    public function __construct($balance, $key) {
        $this->balance = $balance;
        $this->key = $key;
    }

    public function getKey():Key {
        return $this->key;
    }

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->balance;
    }

}
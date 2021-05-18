<?php


namespace App;


class Database
{
    private $accounts;

    public function __construct() {
        $this->accounts = [];
    }

    public function addAccount(Account $account)
    {
        #add this account to the array of accounts
        $this->accounts[] = $account;
    }

    public function insert(BankAccount $account): bool {

        $this->accounts[] = $account;

        if($this->accounts[] = $account) {
            return true;
        } else {
            return false;
        }
    }

    public function find(Key $key) {
        foreach ($this->accounts as $account) {
            if ($key === $account->getKey()){
                return $account;
            }
        }

    }

}
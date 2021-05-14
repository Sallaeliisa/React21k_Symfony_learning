<?php


namespace App;


class Bank
{
    private $accounts;

    public function __construct()
    {
        $this->accounts = [];
    }

    public function addAccount(Account $account)
    {
        #add this account to the array of accounts
        $this->accounts[] = $account;
    }

    #look under the array of accounts for the one with matching id, return the account if found
    public function getAccountById(int $accountId)
    {
        foreach ($this->accounts as $account) {
            if ($accountId === $account->getId()){
                return $account;
            }
        }
    }

}
<?php


namespace App\Utils;


interface BankAccountInterface
{
    public function withdraw(int $amount): bool;

    public function deposit(int $amount): void;

}
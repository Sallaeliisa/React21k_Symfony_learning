<?php

namespace App\Controller;

use App\Account;
use App\Bank;
use App\BankAccount;
use App\Database;
use App\Key;
use App\MortgagePayment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BankAccountController extends AbstractController
{
    #[Route('/bank/account', name: 'bank_account')]
    public function index(): Response
    {
        $bank = new Bank();
        $firstAccount = new Account(1000, 12345);
        $secondAccount = new Account(5000, 123);
        $thirdAccount = new Account(10000, 9999);

        $bank->addAccount($firstAccount);
        $bank->addAccount($secondAccount);
        $bank->addAccount($thirdAccount);

        $bank->getAccountById(9999)->deposit(-1000); # illegal
        $bank->getAccountById(9999)->deposit(1000); #legal, should add 1000

        $bank->getAccountById(123)->withdraw(-10000); # illegal
        $bank->getAccountById(123)->withdraw(10000); # legal, not possible
        $bank->getAccountById(123)->withdraw(1000); # legal, should deduct 1000


        #$mortgagePayment = New MortgagePayment($firstAccount);
        #$mortgagePayment->makePayment(50);


        #Exercises 18.5.

        $data = new Database();

        $key1 = new Key(1234);
        $account1 = new BankAccount(200, $key1);

        $key2 = new Key(2407);
        $account2 = new BankAccount(5200, $key2);

        $data->insert($account1);
        $data->insert($account2);



        return $this->json([
            #'bank_id' => $bank->getAccountById(12345)->getId(),
            #'balance' => $bank->getAccountById(12345)->getBalance()
            'account_key' => $key1->getNumber(),
            'balance' => $data->find($key1)->getBalance()
        ]);



    }
}

<?php
interface BankAccount{
    public function Credit(int $amount, string $time, string $acc);
    public function Debit(int $amount, string $time, string $acc, int  $balance);
}

class ManageBankAccount implements BankAccount{
    public function Credit(int $amount, string $time, string $acc){
              $this->$amount = $amount;
              $this->$time = $time;
              $this->$acc = $acc;

            echo "Amount : {$amount} \n","Time : {$time} \n","Account : {$acc} \n";
    }
    public function Debit(int $amount, string $time, string $acc, int $balance){
           echo "Debit";
    }
}

$objectName = new ManageBankAccount();
$objectName->Credit(10,"10:15 PM","Shanto Molla");
<?php
interface BankAccount{
    public function Credit(int $amount, string $time, string $acc);
    public function Debit(int $amount, string $time, string $acc, int  $balance);
}

class ManageBankAccount implements BankAccount{
    public function Credit(int $amount, string $time, string $acc){
             
    }
    public function Debit(int $amount, string $time, string $acc, int $balance){
           
    }
}


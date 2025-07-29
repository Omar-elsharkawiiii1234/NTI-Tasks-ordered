<?php
class bankAccount{
    private $balance=0;
    public function deposite($bal) {
        $this->balance += $bal;
    }
    public function withd($bal){
        $this ->balance -= $bal;
    }
    public function getBalance() {
        echo "Current Balance Is:".$this->balance;
    }
}
$user=new bankAccount();
$user->deposite(1200);
$user->withd(500);
$user->getBalance();
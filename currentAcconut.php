<?php
/*this includes the parent class php file with require once  
which makes sue that a particular file is included only once if already included it negelects*/
require_once('./bankAccount.php');  
class CurrentAccount extends  BankAccount{      /*CurrentAccount=>child class of parent class=>bank account*/

    /*Declare Properites of child class; debit card, checkbook with public access*/
    public $debitCard;
    public $checkbook;
    static public $orderCheckBookFees=7.5;      /*define a static property*/

    /*Delaring of child class method orderCheckBook with access specifier as public*/
    public function orderCheckBook(){
        if ($this->getBalance() >= self::$orderCheckBookFees){      //checks if there's sufficent fund to purchase the check book
            $bal = $this->getBalance() - self::$orderCheckBookFees;     //if true deducted the checkbook rate with balance
            /*after deducting, the msg below is prompt with th */
            return " <br> Sufficient fund to purchase a cheque book. <br>" . $bal . 
            " balance after purchasing a cheque book. <br>" . self::$orderCheckBookFees . " has beeen deducted from the account.";  
        } else {
            /*if not enough fund to purchase the book it would return "insuffient fund" */
            return "Insuffient fund";
        }

    }

    /*Delaring of child class method checkBalance with access specifier as public*/
    public function checkBalance(){
        return $this->getBalance();
    }

    public function askHistoryTransaction(){
        foreach($this->transactions as  $transaction){
           echo "Transaction Type : $transaction[Title], Amount : $transaction[Amount], Date : $transaction[Date] <br>";
        }
    }

}




// echo "Your Balance is : ".$curAcc->checkBalance()."<br>";
// echo "Your Transaction Histoy : <br>" ;
// echo $curAcc->askHistoryTransaction();



?>
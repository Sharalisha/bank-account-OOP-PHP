<!DOCTYPE>
<html>
<head> 
<title> Bank Account </title>
</head>
<body>
<?php

echo "<h2> <center> <u> BANK ACCOUNT </u> </center> </h2>";
 /*Parent class: Bank Account*/
class BankAccount {      
     /*Declare Properites of parent class; accountHolder name, account No, branch no, apr, transaction with public access,
     and initial balance with private access*/
    public $holdersName;
    public $accountNumber;
    public $sortCode;
    private $balance = 1;
    public $APR;
    public $transactions = array();   //an empty array has been created to use for the transactions made

    /*A __construct is used here it gets invoked every time a new object is created. 
    This __construct function is called with arguments */
    public function __construct($holdersName,$accountNumber,$sortCode, $balance, $APR) {        
        $this->holdersName = $holdersName;
        $this->accountNumber = $accountNumber;
        $this->sortCode = $sortCode;
        $this->balance = $balance;
        $this->APR = $APR;
    }

    /*Delaring of parent class method deposit with access specifier as public*/
    public function deposit($transaction) {
        $this->balance = $this->balance + $transaction['Amount'];
    }

    /*Delaring of parent class method deposit with access specifier as public*/
    public function withdraw($transaction) {
        if(($this->balance) < $transaction['Amount']){      //if the balance is less than withdraw required amount
            echo 'Not enough funds to withdraw. ';
        } else{
            $this->balance = $this->balance - $transaction['Amount'];  
        }
    }

    /*Delaring of parent class method make_transaction with access specifier as public*/
    public function make_transaction($transactions){
        $this->transactions = array_merge($this->transactions, $transactions);
        sort($this->transactions);      //sort the transaction
        foreach($this->transactions as  $obj){
            if($obj['Title'] == 'Deposited') {
                $this->deposit($obj);
            } elseif ($obj['Title'] == 'Withdraw') {
                $this->withdraw($obj);
            }
        }
    }

    /*$balance is acessed or used with setter n getter as its access pecifier is private */
    function setBalance($balance){      /*Setter */
        $this->balance=$balance;
    }
    
    function getBalance(){              /* Getter*/
        return $this->balance;
    }

}

?>
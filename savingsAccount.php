<?php
/*this includes the parent class php file with require once  
which makes sue that a particular file is included only once if already included it negelects*/
require_once('./bankAccount.php');

class SavingsAccount extends  BankAccount{      /*SavingsAccount=>child class of parent class=>bank account*/
    public $APRPaymentPref = "yearly";          /*Declare Property of child class; APRpaymnetPerference with public access and assign as yearly*/
    static public $extraBonus=0.25;             /**Declare Property of child class; extraBonus static property*/

    /*Delaring of child class method call Interest with access specifier as public*/
    public function calInterest(){
        if($this->APRPaymentPref == "yearly"){      /*if the value assigned for APRPaymentPref is equal to yearly then yearly interest will be calculated*/
            $interest =  $this->getBalance() *(($this->APR + self::$extraBonus) / 100);
            return $interest;
        } else {
            echo "You requested for yearly interest not monthly!!!"; /*if the condition returns false it would echo this statment */
        }
        
    }

    /*Delaring of child class method call finalSavingReturn with access specifier as public*/
    public function finalSavingReturn(){
        /*calculates the final balance including 
        the two years yearly interest */
        $finalSav = (($this->getBalance() *(($this->APR + self::$extraBonus) / 100)) *2) + $this->getBalance(); 
        return $finalSav;
    }

}


?>
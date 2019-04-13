<?php
    /*this includes the needed php file with require once  
    which makes sure that a particular file is included only once if already included it negelects*/
    require_once('currentAcconut.php');
    require_once('savingsAccount.php');
    require_once('bankAccount.php');

    $curAcc = new CurrentAccount ("Ms.Jane Smith","123456789", "00-11-00", 680 , 0);        /*Defines a Current account object*/
    $savAcc = new SavingsAccount ("Mr.Peter Bond", "987654321","11-11-11", 6800 , 0.8);    /*Defines a Savings account object*/
    $test = new CurrentAccount ("Ms.Sara Vakee","10456783", "12-11-12", 1500 , 0);

    $transactions = array(      //transaction array
        array(
            "Date"=> "01/01/2019",
            "Title" => "Withdraw",
            "Amount" =>  235
        ),
    
        array(
            "Date"=> "05/01/2019",
            "Title" => "Withdraw",
            "Amount" =>   138
        ),
        array(
            "Date"=> "25/01/2019",
            "Title" => "Withdraw",
            "Amount" =>   420
        ),
    
        array(
            "Date"=> "14/01/2019" ,
            "Title" => "Deposited",
            "Amount" =>  300
           ),
        array(
            "Date"=> "12/01/2019",
            "Title" => "Deposited",
            "Amount" =>  85
        ),
        array(
            "Date"=> "30/01/2019",
            "Title" => "Deposited",
            "Amount" =>  25
        )
      );

    echo "<ul>";
    echo "<h3> <u> Current Account </u>  </h3> ";   /*Title for current account */
    echo "<li> Holder Name: <strong>" .$curAcc -> holdersName ."</strong>  <br> </li>";     //displays the current account holders name
    echo "<li> Account Number: <strong>" .$curAcc -> accountNumber ."</strong> <br>  </li>";    //displays the current account account no
    echo "<li> Branch Code: <strong>" .$curAcc -> sortCode ."</strong>  <br> </li>";            //displays the current account branch code
    echo "<li> Initial Accunt Balance: <strong>" .$curAcc ->getBalance()  ."</strong>  <br> <br>  </li>";     //use the function getBalance
    echo "<li> <strong> <u> Transactions made: </u> </strong> </li> ";
    $curAcc->make_transaction($transactions);   //use the function make_transaction
    $curAcc ->askHistoryTransaction();  //use the function askHistoryTransaction
    echo "<br>";
    echo "<li> Current, Account Balance after transactions: <strong>" .$curAcc ->getBalance()  ."</strong>  <br> <br> </li>";     //use the function getBalance 


    echo "<h3> <u> Current Account (Test Case) </u>  </h3> ";   /*Title for current account */
    echo "<li> Holder Name: <strong>" .$test -> holdersName ."</strong>  <br> </li>";     //displays the current account holders name
    echo "<li> Account Number: <strong>" .$test -> accountNumber ."</strong> <br>  </li>";    //displays the current account account no
    echo "<li> Branch Code: <strong>" .$test -> sortCode ."</strong>  <br> </li>";            //displays the current account branch code
    echo "<li> Initial Accunt Balance: <strong>" .$test ->getBalance()  ."</strong>  <br> <br>  </li>";     //use the function getBalance
    echo "<li> <strong> <u> Transactions made: </u> </strong> </li> ";
    $test->make_transaction($transactions);   //use the function make_transaction
    $test ->askHistoryTransaction();  //use the function askHistoryTransaction
    echo "<br>";
    echo "<li> Current, Account Balance after transactions: <strong>" .$test ->getBalance()  ."</strong>  <br> <br> </li>";     //use the function getBalance 
    echo "<li> <u> Cheque Book Details </u>: " .$test ->orderCheckBook()."<br> <br> </li>";           //use the function orderCheckBook 


    echo "<h3> <u> Savings Account </u> </h3> ";        /*Title for savings account */
    echo "<li> Holder Name: <strong>" .$savAcc -> holdersName ."</strong> </strong> <br> </li>";    //displays the savings account holders name
    echo "<li> Account Number: <strong>" .$savAcc -> accountNumber ."</strong>  <br> </li>";    //displays the savings account account no
    echo "<li> Branch Code: <strong>" .$savAcc -> sortCode ."</strong>  <br></li>";     //displays the savings account branch no
    echo "<li> Initial Account Balance: <strong>"  .$savAcc ->getBalance() ."</strong>  <br> <br></li>";    //use the function getBalance 


    echo "<table border=1px solid black>";      /*A table that prints about the interest rates */
    echo "<tr>";
    echo "<td>  <b > Savings Account APR - 0.8% </b> </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>  <b> If APR paid monthly- 0.8% / 12  </b> </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>  <b> If APR paid yearly- 0.8% + 0.25% (Extra Bonus) = 1.05% </b> </td>";
    echo "</tr>";
    echo "</table> <br>";

    echo "<li> Interest paid yearly -> 1 year interest: <strong>" .$savAcc -> calInterest() ."</strong>  <br> </li>";   //use the function calInterest
    echo "<li> Final Savings at the end of 2 years including interest: <strong>"  .$savAcc ->finalSavingReturn()."</strong> <br> </li>";    //use the function finalSavingReturn
    echo "</ul>";

?>
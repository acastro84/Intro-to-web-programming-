<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>Validate Credit Card</title>
 <meta http-equiv="content-type" content="text/html;
 charset=iso-8859-1" />
</head>


<body>

<h1>Validate Credit Card</h1><hr />

<?php

$CreditCard = array("","8910-1234-5678-6543", "8914-7234-5978-O123","8914 7234 5978 9123", "OOOO-9123-4567-0123");

foreach ($CreditCard as $CardNumber) { // Iterate array using card number variable. 

    if (empty($CardNumber)){ 

        echo "<p>This Credit Card Number is invalid because it contains an empty string. </p>"; //Custom error for empty index of array. 

    }

    else{ //if not empty

        $CreditCardNumber = $CardNumber; //declared here. 

        $CreditCardNumber = str_replace("-", "", $CreditCardNumber); // strip "-"

        $CreditCardNumber = str_replace(" ", "", $CreditCardNumber); // strip blank spaces.

        if (!is_numeric($CreditCardNumber)) //If statement handles last 2 conditions. 

            echo "<p>Credit Card Number " .$CreditCardNumber . "  is not a valid Credit Card number because it contains a non-numeric character. </p>"; //not numeric

        else

            echo "<p>Credit Card Number " .$CreditCardNumber . " is a valid Credit Card number.</p>"; // win

    }

}           

?>

</body>

</html>

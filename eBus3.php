<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="homepage.css">
    </head>
    <body>
        <div>
            <h1>Purchase Receipt</h1>
<?php

session_start();
$totalValue2 = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
$emailValue = $_POST['txtEmail'];
echo "Name: ".$fullNameValue.".";
echo "<br> </br>";
echo "Email: ".$emailValue.".";
echo "<br> </br>";
echo "The total value is: ".$totalValue2.".";
?>
     
        </div>
    <center>
        <button onclick="window.location.href='eBus1.php'">Return to Selections</button>
    </body>
</html>

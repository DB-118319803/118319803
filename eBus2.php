<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
$emailValue = "";
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;
$_SESSION['txtEmail'] = $emailValue;

/**
 *Allocate the email session variable to a text box
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="homepage.css">
        <title>eBusiness 2</title>
    </head>
    <body>
        <div class="form">
            <form name="Details" method="post" action="EBus3.php">
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b>Enter your details below</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" required /></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="email" id="txtEmail" name="txtEmail" value="" required /></td>
                        </tr>
                        <tr>
                            <td>PIN</td>
                            <td><input type="text" name="pin" pattern="[0-9]{4}"  size="4" maxlength="4" required ></td>
                        </tr>
                        <tr>
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                        </tr>
                        
                    </table>
                </center>
                
                <center>
                    <button onclick="window.location.href='eBus1.php'">Return to Selections</button>
                    
                    <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
                </center>
            </form>
        </div>
    </body>
</html>



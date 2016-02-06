<?php
/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW2_Spring_2016
 * Author: Arvin-tcm 
 * Filename: signup.php 
 * Date and Time: Feb 5, 2016 12:33:10 AM 
 * Project Name: TsaiChangMai_10010_CS526A_HW2 
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Customer Sign Up Form</title>
    </head>
    <style>
        .error {
            color:red;
            font-weight:bold;
        }
    </style>
    <body>
        <form action="addcustomer.php" method="post">
            <table border="0" cellspacing="1" cellpadding="3">
                <tr>
                    <td>
                        Enter your information:
                    </td>
                </tr>
                <tr>
                    <td>
                        Email Address: 
                    </td>
                    <td>
                        <input size="20" type="text" name="email" value="<?php echo filter_input(INPUT_POST, 'email'); ?>">
                        <span id="emailmsg" class="error">
                            <?php
                            if (isset($emailErr)) {
                                echo $emailErr;
                            }
                            ?>
                        </span>
                    </td>

                </tr>
                <tr>
                    <td>
                        Password: 
                    </td>
                    <td>
                        <input size="20" type="password" name="passwd" value="<?php echo filter_input(INPUT_POST, 'passwd'); ?>">
                        <span id="passwdmsg" class="error">
                            <?php
                            if (isset($passwdErr)) {
                                echo $passwdErr;
                            }
                            ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        ReType Password:  
                    </td>
                    <td>
                        <input size="20" type="password" name="repasswd">
                        <span id="repasswdmsg" class="error">
                            <?php
                            if (isset($repasswdErr)) {
                                echo $repasswdErr;
                            }
                            ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Full Name  
                    </td>
                    <td>
                        <input size="50" type="text" name="name" value="<?php echo filter_input(INPUT_POST, 'name'); ?>">
                        <span id="usrmsg" class="error">
                            <?php
                            if (isset($nameErr)) {
                                echo $nameErr;
                            }
                            ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Address:  
                    </td>
                    <td>
                        <input size="80" type="text" name="address" value="<?php echo filter_input(INPUT_POST, 'address'); ?>">
                        <span id="addressmsg" class="error">
                            <?php
                            if (isset($addressErr)) {
                                echo $addressErr;
                            }
                            ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        City:  
                    </td>
                    <td>
                        <input size="30" type="text" name="city" value="<?php echo filter_input(INPUT_POST, 'city'); ?>">
                        <span id="citymsg" class="error">
                            <?php
                            if (isset($cityErr)) {
                                echo $cityErr;
                            }
                            ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        State: 
                    </td>
                    <td>
                        <input size="30" type="text" name="state" value="<?php echo filter_input(INPUT_POST, 'state'); ?>">
                        <span id="statemsg" class="error">
                            <?php
                            if (isset($stateErr)) {
                                echo $stateErr;
                            }
                            ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Country:  
                    </td>
                    <td>
                        <input size="30" type="text" name="country" value="<?php echo filter_input(INPUT_POST, 'country'); ?>">
                        <span id="countrymsg" class="error">
                            <?php
                            if (isset($countryErr)) {
                                echo $countryErr;
                            }
                            ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Zip Code:  
                    </td>
                    <td>
                        <input size="20" type="text" name="zip" value="<?php echo filter_input(INPUT_POST, 'zip'); ?>">
                        <span id="zipmsg" class="error">
                            <?php
                            if (isset($zipErr)) {
                                echo $zipErr;
                            }
                            ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Phone No:  
                    </td>
                    <td>
                        <input size="30" type="text" name="phone" value="<?php echo filter_input(INPUT_POST, 'phone'); ?>">
                        <span id="phonemsg" class="error">
                            <?php
                            if (isset($phoneErr)) {
                                echo $phoneErr;
                            }
                            ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Submit">
                    </td>
                    <td>
                        <input type="reset" value="Cancel">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
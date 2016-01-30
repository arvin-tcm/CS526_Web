<!DOCTYPE html>
<!--
 * Student Info: Name=TsaiChangMai, ID=10010
 * Subject: CS526A_HW1_Spring_2016
 * Author: Arvin-tcm 
 * Filename: newEmptyPHP.php 
 * Date and Time: Jan 30, 2016 4:57:03 AM 
 * Project Name: TsaiChangMai_10010_CS526A_HW1 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        $new_balance;

        // php function to calculate the new balance
        function calculate($starting_balance, $total_credits, $total_charges) {
            if (empty($starting_balance) || empty($total_credits) || empty($total_charges)) {
                return NULL;
            }
            $GLOBALS['new_balance'] = $starting_balance - $total_credits + $total_charges;
            return $GLOBALS['new_balance'];
        }

        // php function to check the new balance over the credit limit
        // true new balance > limit
        function balance_check($credit_limit) {
            if (!isset($GLOBALS['new_balance'])) {
                return NULL;
            }
            if ($GLOBALS['new_balance'] <= $credit_limit) {
                $remaining = $credit_limit - $GLOBALS['new_balance'];
                return 'Remaining credit: $' . $remaining;
            } else {
                return "exceeded credit limit";
            }
        }
        ?>
        <div>
            <form method="post" name="myForm">
                <table cellpadding="4" style="border: 2px solid; background-color: #e6e6e6">
                    <tbody>
                        <tr>
                            <td>
                                Account number:
                            </td>
                            <td>
                                <input type="number" name="account_number" value="<?php echo filter_input(INPUT_POST, 'account_number'); ?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Starting balance:
                            </td>
                            <td>
                                <input type="number" name="starting_balance" value="<?php echo filter_input(INPUT_POST, 'starting_balance'); ?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Total charges:
                            </td>
                            <td>
                                <input type="number" name="total_charges" value="<?php echo filter_input(INPUT_POST, 'total_charges'); ?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Total credits:
                            </td>
                            <td>
                                <input type="number" name="total_credits" value="<?php echo filter_input(INPUT_POST, 'total_credits'); ?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Credit limit:
                            </td>
                            <td>
                                <input type="number" name="credit_limit" value="<?php echo filter_input(INPUT_POST, 'credit_limit'); ?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                New balance:
                            </td>
                            <td>
                                <input type="number" name="new_balance" style="background-color: #e6e6e6" readonly value="<?php echo calculate(filter_input(INPUT_POST, 'starting_balance'), filter_input(INPUT_POST, 'total_credits'), filter_input(INPUT_POST, 'total_charges')) ?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="text" name="remainging_credit" size="38"  style="background-color: #e6e6e6" readonly value="<?php echo balance_check(filter_input(INPUT_POST, 'credit_limit')) ?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="reset">Clear Field</button>
                            </td>
                            <td>
                                <input type="submit" name="calculate" value="Calculate Balance" />
                            </td>
                        </tr>
                    </tbody>
                </table>   
            </form>
        </div>
    </body>
</html>

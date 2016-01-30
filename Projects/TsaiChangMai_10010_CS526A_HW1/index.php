<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
</script>
<body>

    <?php
    $new_balance;

    // php function to calculate the new balance
    function calculate($starting_balance, $total_credits, $total_charges) {
        if (empty($starting_balance) || empty($total_credits) || empty($total_charges)) {
            return NULL;
        }
        $GLOBALS['new_balance'] = $starting_balance - $total_credits + $total_charges;
        return '$' + $GLOBALS['new_balance'];
    }

    // php function to check the new balance over the credit limit
    // true new balance > limit
    function balance_check($credit_limit) {
        if (!isset($GLOBALS['new_balance'])) {
            return NULL;
        }
        if ($GLOBALS['new_balance'] > $credit_limit) {
            return "more";
        } else {
            return "less";
        }
    }
    ?>
    <form method="post" name="myForm">
        <table cellpadding="4">
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
                        <input type="number" name="new_balance" readonly value="<?php echo calculate(filter_input(INPUT_POST, 'starting_balance'), filter_input(INPUT_POST, 'total_credits'), filter_input(INPUT_POST, 'total_charges')) ?>"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="text" name="remainging_credit" size="38" readonly value="<?php echo balance_check(filter_input(INPUT_POST, 'credit_limit')) ?>"/>
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
</body>
</html>
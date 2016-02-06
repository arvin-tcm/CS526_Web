<?php
/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(A)_Quiz1_Spring_2016
 * Author: Arvin 
 * Filename: page1.php 
 * Date and Time: Feb 5, 2016 8:00:58 PM 
 * Project Name: TsaiChangMai_10010_CS526A_Quiz1 
 */


if (isset($_POST['next'])) {
    $lastName = $_POST['last_name'];
    include('page2.php');
    exit();
}
if (!isset($lastName)) {
    $lastName = "";
}
?>
<html>
    <head>
        <title>Page 1</title>
    </head>
    <body>
        <form action="page1.php" method="post">
            <table border="0" cellspacing="1" cellpadding="3">
                <tr>
                    <td>
                        Last Name
                    </td>
                </tr>
                <tr>
                    <td>
                        <input size="30" type="text" name="last_name" value="<?php echo $lastName; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="next" value="Next">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
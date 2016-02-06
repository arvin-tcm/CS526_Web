<?php
/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(A)_Quiz1_Spring_2016
 * Author: Arvin 
 * Filename: page3.php 
 * Date and Time: Feb 5, 2016 8:01:16 PM 
 * Project Name: TsaiChangMai_10010_CS526A_Quiz1 
 */
if (isset($_POST['prev3'])) {
    $lastName = $_POST['last_name'];
    $firstName = $_POST['first_name'];
    include('page2.php');
    exit();
}
if (isset($_POST['next3'])) {
    $lastName = "";
    $firstName = "";
    include('page1.php');
    exit();
}
?>
<html>
    <head>
        <title>Page 3</title>
    </head>
    <body>
        <form action="page3.php" method="post">
            <table border="0" cellspacing="1" cellpadding="3">
                <tr>
                    <td>
                        Last Name
                    </td>
                    <td>
                        <?php echo $lastName; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        First Name
                    </td>
                    <td>
                        <?php echo $firstName; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="prev3" value="Prev">
                    </td>
                    <td>
                        <input type="submit" name="next3" value="Finish">
                    </td>
                    <td>
                        <input hidden tpye="text" name ="first_name" value="<?php echo $firstName ?>">
                    </td>
                    <td>
                        <input hidden tpye="text" name ="last_name" value="<?php echo $lastName ?>">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
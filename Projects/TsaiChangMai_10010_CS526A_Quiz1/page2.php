<?php
/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(A)_Quiz1_Spring_2016
 * Author: Arvin 
 * Filename: page2.php 
 * Date and Time: Feb 5, 2016 8:01:08 PM 
 * Project Name: TsaiChangMai_10010_CS526A_Quiz1 
 */
//<?php echo $lastName; 
if (isset($_POST['prev2'])) {
    $lastName = $_POST['last_name'];
    include('page1.php');
    exit();
}
if (isset($_POST['next2'])) {
    $lastName = $_POST['last_name'];
    $firstName = $_POST['first_name'];
    include('page3.php');
    exit();
}
if (!isset($firstName)) {
    $firstName = "";
}
?>
<html>
    <head>
        <title>Page 2</title>
    </head>
    <body>
        <form action="page2.php" method="post">
            <table border="0" cellspacing="1" cellpadding="3">
                <tr>
                    <td>
                        <?php echo $firstName; ?>First Name
                    </td>
                </tr>
                <tr>
                    <td>
                        <input size="30" type="text" name="first_name"  value="<?php echo $firstName; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="prev2" value="Prev">
                    </td>
                    <td>
                        <input type="submit" name="next2" value="Next">
                    </td>
                </tr>
                <td>
                    <input hidden tpye="text" name ="last_name" value="<?php echo $lastName ?>">
                </td>
            </table>
        </form>
    </body>
</html>
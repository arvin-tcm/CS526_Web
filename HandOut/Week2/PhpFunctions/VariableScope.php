<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Demo of Passed-by-reference</title>
    </head>
    <body>
        <?php
        $GlobalVariable = "Global variable";
        function scopeExample() {
            $LocalVariable = "<p>Local variable</p>";
            echo "<p>$LocalVariable</p>"; // displays successfully
            echo "<p>$GlobalVariable</p>"; // error message 
        }
        scopeExample();
        echo "<p>$GlobalVariable</p>";
        echo "<p>$LocalVariable</p>"; // error message 
        ?>
    </body>
</html>

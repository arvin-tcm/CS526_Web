<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Demo of Passed-by-reference</title>
    </head>
    <body>
        <?php

        function IncrementByValue($CountByValue) {
            ++$CountByValue;
            echo "<p>IncrementByValue() value is $CountByValue.</p>";
        }

        function IncrementByReference(&$CountByReference) {
            ++$CountByReference;
            echo "<p>IncrementByReference() value is $CountByReference.</p>";
        }

        $Count = 1;
        echo "<p>Main program starting value is $Count.</p>";
        IncrementByValue($Count);
        echo "<p>Main program between value is $Count.</p>";
        IncrementByReference($Count);
        echo "<p>Main program ending value is $Count.</p>";
        ?>
    </body>
</html>

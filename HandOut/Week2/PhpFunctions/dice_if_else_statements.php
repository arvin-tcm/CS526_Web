<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Roll Dice</title>
    </head>
    <body>
        <?php
        $DiceNamesSingle = array("one", "two", "three", "four", "ﬁve", "six"); 
        $DiceNamesDouble = array("ones", "twos", "threes", "fours", "ﬁves", "sixes"); 
        function CheckForDoubles($Die1, $Die2) {     
            global $DiceNamesSingle;     
            global $DiceNamesDouble;     
            $ReturnValue = false;
            if ($Die1 == $Die2) {// Doubles          
                echo "The roll was double ", $DiceNamesDouble[$Die1-1], ".<br />";   
                $ReturnValue = true; 
            } 
            else { // Not Doubles          
                echo "The roll was a ", $DiceNamesSingle[$Die1-1], " and a ", 
                    $DiceNamesSingle[$Die2-1], ".<br />"; 
                $ReturnValue = false;
            }
            return $ReturnValue;
        }
        function DisplayScoreText($Score, $Double) {    
            if ($Double) { // Doubles were rolled
                if ($Score == 2)          
                    echo "You rolled TWO!<br />";  
                if ($Score == 12)          
                    echo "You rolled TWELVE!<br />"; 
            } 
            else { 
                if ($Score == 3)          
                    echo "You rolled THREE!<br />";     
                if ($Score == 5)          
                    echo "You rolled FIVE!<br />";     
                if ($Score == 7)          
                    echo "You rolled SEVEN!<br />";     
                if ($Score == 9)          
                    echo "You rolled NINE!<br />";     
                if ($Score == 11)          
                    echo "You rolled ELEVENTH!<br />";     
            }       
        }       
        $Dice = array(); 
        $Dice[0] = rand(1,6); 
        $Dice[1] = rand(1,6); 
        $Score = $Dice[0] + $Dice[1]; 
        echo "<p>"; 
        echo "The total score for the roll was $Score.<br />";     
        $Double = CheckForDoubles($Dice[0],$Dice[1]); 
        DisplayScoreText($Score, $Double); 
        echo "</p>"; 
        ?>
    </body>
</html>

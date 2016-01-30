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
        $DoubleCount = 0; 
        $RollNumber = 1;
        $Dice = array(); 
        while ($RollNumber <= 5) {
            $Dice[0] = rand(1,6); 
            $Dice[1] = rand(1,6); 
            $Score = $Dice[0] + $Dice[1]; 
            echo "<p>"; 
            echo "The total score for roll $RollNumber was $Score.<br />";     
            $Double = CheckForDoubles($Dice[0],$Dice[1]); 
            DisplayScoreText($Score, $Double); 
            echo "</p>"; 
            if ($Double)
                ++$DoubleCount;
           ++$RollNumber;
        }
        
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
            switch ($Score) {
                case 2:
                    echo "You rolled TWO!<br />";  
                    break;
                case 3:
                    echo "You rolled THREE!<br />";  
                    break;
                case 5:
                    echo "You rolled FIVE!<br />";  
                    break;
                case 7:
                    echo "You rolled SEVEN!<br />";  
                    break;
                case 9:
                    echo "You rolled NINE!<br />";  
                    break;
                case 11:
                    echo "You rolled ELEVENTH!<br />";  
                    break;
                case 12:
                    echo "You rolled TWELVE!<br />";  
                    break;
                default:
                    if ($Score % 2 == 0) { /* An even number */
                      if ($Doubles) {
                           echo "You rolled a hard $Score!<br />";
                      }
                      else { /* Not doubles */
                            echo "You rolled an easy $Score!<br />";
                      }
                    }                
            }       
        }
        
        ?>
    </body>
</html>

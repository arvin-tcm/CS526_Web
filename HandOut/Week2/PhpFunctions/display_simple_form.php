<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Display Simple Form</title>
    </head>
    <body>
        <h1>Display Simple Form</h1>  
        <?php      
            $first_name = $_GET['first_name'];
            $last_name = $_GET['last_name'];
            echo "Welcome! $first_name, $last_name";
        ?>
              
    </body>
</html>
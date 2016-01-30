<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Simple Form</title>
    </head>
    <body>
        <?php      
        ?>
        <h1>Simple Form</h1>
        <form method="get" action="display_simple_form.php">
            <label>First Name: </label>
            <input type="text" name="first_name" /><br />
            <label>Last Name: </label>
            <input type="text" name="last_name" /><br />
            <input type="submit" name="Submit" value="Submit" />
        </form>
        <hr />
        <a href="display_simple_form.php?first_name=Lily&last_name=Wu">Display Lily</a>       
    </body>
</html>

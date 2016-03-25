<?php

/*  
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW3
_Spring_2016
 * Author: Arvin-tcm 
 * Filename: sessionTest.php 
 * Date and Time: Mar 4, 2016 2:08:11 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW3 
 */ 

// Start session management with a persistent cookie
$duration = 60 * 60 * 24 * 7;    // 1 weeks in seconds
session_set_cookie_params($duration, '/');
session_start();

$data = NULL;
// Create a data object if needed
if (empty($_SESSION['data'])) {
    $data = new stdClass();
    $data->lastname = '';
    $data->firstname = '';
    $data->courses = new stdClass();
    $_SESSION['data'] = $data;
} else {
    $data = $_SESSION['data'];
}

// Get the action to perform
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'Profile';
    }
}

if ($action == "Profile") {
    $title = 'Profile';
    $heading = 'Student Information';
    $content = "Last Name: <input type='text' name='lastname' value='$data->lastname' /><br>
            First Name: <input type='text' name='firstname' value='$data->firstname' />";
    $nextAction = "Scores";
}
else if ($action == "Scores") {
    $lastname = filter_input(INPUT_POST, 'lastname');
    if ($lastname !== NULL) {
        $data->lastname = $lastname;
    }
    $firstname = filter_input(INPUT_POST, 'firstname');
    if ($firstname !== NULL) {
        $data->firstname = $firstname;
    }
    $course = filter_input(INPUT_POST, 'course');
    $score = filter_input(INPUT_POST, 'score');
    if ($course === NULL) {
        $course = '';
    } else {
        if (!isset($data->courses->$course)) {
            $data->courses->$course = array();
        }
        array_push($data->courses->$course, $score);
    }

    $title = 'Scores';
    $heading = 'Student Scores';
    $content = "Course Number: <input type='text' name='course' value='$course' /><br>
            Score: <input type='text' name='score' />";
    $nextAction = "Scores";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <h1><?php echo $heading; ?></h1>
        <form name="myForm" action="sessionTest.php" method="post">
            <?php echo $content; ?>
            <hr>
            <input type="submit" name="action" value="<?php echo $nextAction; ?>" />
        </form>
        <hr>
        <?php print_r($data); ?>
    </body>
</html>

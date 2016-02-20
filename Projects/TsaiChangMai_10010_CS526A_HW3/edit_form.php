<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW3
  _Spring_2016
 * Author: Arvin-tcm 
 * Filename: edit_form.php 
 * Date and Time: Feb 19, 2016 4:55:53 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW3 
 */

return "<form method='post' action='index.php?action=edit' >
    <h4>Edit a customer information : $email</h4>
    <input type='text' name='email' value='$email' hidden />
    password: <input type='text' name='passwd'readonly value='$passwd' /><br>
    name: <input type='text' name='name' value='$name' /><br>
    address: <input type='text' name='address' value='$address' /><br>
    city: <input type='text' name='city' value='$city' /><br>
    state: <input type='text' name='state' value='$state' /><br>
    country: <input type='text' name='country' value='$country' /><br>
    zip: <input type='text' name='zip' value='$zip' /><br>
    phone: <input type='text' name='phone' value='$phone' /><br>
    <input type='submit' value='Save' name='edit_submitted' />
    <input type='submit' value='Cancel' name='edit_submitted' />
</form>";

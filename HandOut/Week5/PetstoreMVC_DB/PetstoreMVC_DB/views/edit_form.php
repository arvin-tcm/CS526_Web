<?php
return "
<form method='post' action='index.php?action=admin/edit' >    
        <h4>Edit a pet information</h4>
        <input type=text name='petID' value='$petid' hidden />
        Petname: <input type=text name='petname' readonly value='$petname' /><br>
        Price: <input type=text name='price' value='$price' /><br>
        <input type='submit' value='Save' name='edit_submitted' />
        <input type='submit' value='Cancel' name='edit_submitted' />
</form>
";

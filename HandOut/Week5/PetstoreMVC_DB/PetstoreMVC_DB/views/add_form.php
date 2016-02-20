<?php
return "
<form method='post' action='index.php?action=admin/add' enctype='multipart/form-data' >    
        <label>Choose a pet image to upload</label>    
        <input type='file' name='image_data' accept='image/jpeg'/><br>
        <input type='submit' value='Upload' name='new_submitted' /> 
</form>
<hr>
<form method='post' action='index.php?action=admin/add' >    
        <h4>Add a new pet information</h4>
        Petname: <input type=text name='petname' /><br>
        Price: <input type=text name='price' /><br>
        <input type='submit' value='Add' name='new_submitted' /> 
</form>
";

<?php
$hasPets = isset($petList);
if ($hasPets === false) {
    return 'views/petlist_view.php needs $petList';
}

$output = "
<table> 
     <tr> 
         <th>Petname</th>  
         <th>Price</th>  
         <th>Picture</th>
         <th>Edit</th>
         <th>Delete</th>
     </tr> 
";

foreach($petList as $pet) {
    $output .= "<tr>";
    $src = $pet->imagePath;
    $output .= "<td>$pet->petName</td>"
            . "<td>$pet->price</td>"
            . "<td><img src='$src' height=100 width=100 /></td>"
            . "<td><a href='index.php?action=admin/edit&petID=$pet->petID&petname=$pet->petName&price=$pet->price'>Edit</a></td>"
            . "<td><a href='index.php?action=admin/delete&petID=$pet->petID'>Delete</a></td>";
    $output .=  "</tr>";
}

$output .= '</table>';
return $output;

<?php
/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW5_Spring_2016
 * Author: Arvin-tcm 
 * Filename: cart_list_view.php 
 * Date and Time: Mar 25, 2016 3:30:48 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW5 
 */
if (sizeof($_SESSION['cart']) === 0) {
    echo '<h1>no item in the cart yet</h1?';
    exit();
}
?>
<h1>My Cart</h1>
<div id="main">
    <table>
        <thead>
        <th>food id</th>
        <th>calories</th>
        <th>title</th>
        <th>price</th>
        <th>quantity</th>
        </thead>
        <?php foreach ($_SESSION['cart'] as $item) : ?>
        <tr>
            <td><?php echo $item->food_id; ?></td>
            <td><?php echo $item->food->calories; ?></td>
            <td><?php echo $item->food->title; ?></td>
            <td><?php echo $item->food->price; ?></td>
            <td><?php echo $item->quantity; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

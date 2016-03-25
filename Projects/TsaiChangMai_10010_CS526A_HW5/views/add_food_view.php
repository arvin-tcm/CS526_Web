<!-- 
Student Info: Name=Tsai-Chang Mai, ID=10010
Subject: CS526(C)_HW5_Spring_2016
Author: Arvin-tcm 
Filename: add_food_view.php 
Date and Time: Mar 24, 2016 5:34:00 PM 
Project Name: TsaiChangMai_10010_CS526A_HW5 
--> 
<?php
$hasCategories = isset($categories);
if ($hasCategories === false) {
    echo '<h1>view/add_food_view.php needs $categories </h1>';
    exit();
}
?>

<h1>Add Food Page</h1>
<div id="main">
    <form action="?controller=admin&action=add_food" method="post">
        <input type="hidden" name="action" value="add_food" />

        <label>Category:</label>
        <select name="category_id">
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category->getID(); ?>">
                    <?php echo $category->getName(); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br />
        <label>Calories:</label>
        <input type=text" name="calories" /> 
        <br />
        <label>Title:</label>
        <input type=text" name="food_title" /> 
        <br />
        <label>Price:</label>
        <input type=text" name="food_price" /> 
        <br />
        <label>&nbsp;</label>
        <input type="submit" value="Add Food" name="addfood_submitted" /> 
        <br />
    </form>
</div>
<?php
/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW5_Spring_2016
 * Author: Arvin-tcm 
 * Filename: manage_food_list_view.php 
 * Date and Time: Mar 24, 2016 6:01:52 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW5 
 */
$hasFoods = isset($foods);
$hasCategories = isset($categories);

if ($hasFoods === false || $hasCategories === false) {
    echo '<h1>view/book_list.php needs $books</h1>';
    exit();
}
?>

<h1>Manage Your Food</h1>
<div id="sidebar">
    <h2>Categories</h2>
    <?php foreach ($categories as $category2) : ?>
        <ul>
            <li>
                <a href="?controller=admin&category_id=<?php echo $category2->getID(); ?>">
                    <?php echo $category2->getName(); ?>
                </a>
            </li>
        </ul>
    <?php endforeach; ?>
</div>
<div id="main">
    <h2><?php echo $category->getName(); ?></h2>
    <table>
        <tr>
            <th>Calories</th>
            <th>Food Title</th>
            <th>Food Price</th>
            <th>Delete</th>
        </tr>
        <?php foreach ($foods as $food) : ?>
            <tr>
                <td><?php echo $food->getCalories(); ?></td>
                <td><?php echo $food->getTitle(); ?></td>
                <td><?php echo $food->getPrice(); ?></td>
                <td>
                    <form action="?controller=admin&action=delete_food" method="post">
                        <input type="hidden" name="food_id" value="<?php echo $food->getID(); ?>" />
                        <input type="hidden" name="category_id" value="<?php echo $category->getID(); ?>" />
                        <input type="submit" value="Delete"/>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p><a href="?controller=admin&action=add_food">Add Product</a></p>
</div>
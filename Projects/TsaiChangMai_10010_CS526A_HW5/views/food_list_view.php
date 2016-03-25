<?php
/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW5_Spring_2016
 * Author: Arvin-tcm 
 * Filename: food_list_view.php 
 * Date and Time: Mar 24, 2016 5:39:33 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW5 
 */
$hasFoods = isset($foods);
$hasCategories = isset($categories);

if ($hasFoods === false || $hasCategories === false) {
    echo '<h1>view/book_list.php needs $books</h1>';
    exit();
}
?>

<h1>Searching Your Food</h1>
<div id="sidebar">
    <h2>Categories</h2>
    <?php foreach ($categories as $category2) : ?>
        <ul>
            <li>
                <a href="?controller=guest&category_id=<?php echo $category2->getID(); ?>">
                    <?php echo $category2->getName(); ?>
                </a>
            </li>
        </ul>
    <?php endforeach; ?>
</div>
<div id="main">
    <h2><?php echo $category->getName(); ?></h2>
    <ul class="nav">
        <?php foreach ($foods as $food) : ?>
            <li>
                <a href="?controller=guest&action=view_food&food_id=<?php echo $food->getID(); ?>">
                    <?php echo $food->getTitle(); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

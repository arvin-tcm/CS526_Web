<?php
/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW5_Spring_2016
 * Author: Arvin-tcm 
 * Filename: food_view.php 
 * Date and Time: Mar 24, 2016 5:48:02 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW5 
 */
$hasFood = isset($food);
$hasCategories = isset($categories);
if ($hasFood === false || $hasCategories === false) {
    echo '<h1>view/book_list_view.php needs $book</h1>';
    exit();
}
?>
<h1>Searching Your Food</h1>
<div id="sidebar">
    <h1>Categories</h1>
    <ul class="nav">
        <!-- display links for all categories -->
        <?php foreach ($categories as $category) : ?>
            <li>
                <a href="?category_id=<?php echo $category->getID(); ?>">
                    <?php echo $category->getName(); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
<div id="main">
    <h1><?php echo $food->getTitle(); ?></h1>
    <div id="left_column">
        <p>
            <img src="<?php $food->getImagePath(); ?>"
                 alt="<?php echo $food->getImageAltText(); ?>" />
        </p>
    </div>

    <div id="right_column">
        <p><b>List Price:</b> $<?php echo $food->getFormattedPrice(); ?></p>
        <p><b>Discount:</b> <?php echo $food->getDiscountedPercentage(); ?>%</p>
        <p><b>You Price:</b> $<?php echo $food->getDiscountPrice(); ?>
            (You save $<?php echo $food->getDiscountAmount(); ?>)</p>
        <form action="?controller=guest&action=add_cart" method="post">
            <input type="hidden" name="action" value="addToCart" />
            <input type="hidden" name="food_id" value="<?php echo $food->getID(); ?>" />
            <b>Quantity</b>
            <input type="text" id="quantity" name="quantity" value="1" size="2" />
            <br /><br />
            <input type="submit" value="Add to cart" name="addcart_submitted"/>
        </form>
    </div>
</div>
</html>
<?php
use Phppot\Product;
use Phppot\Config;
require_once __DIR__ . '/../config/Config.php';
require_once __DIR__ . '/../lib/Product.php';

$productModel = new Product();

if (! empty($_POST["keyword"])) {

    $serach = "%" . $_POST['keyword'] . "%";

    $productResult = $productModel->getProductByKeyword($serach, Config::MIN_SEARCH_RESULT_COUNT);

    $featuredProductResult = $productModel->getFeaturedProductByKeyword($serach, $productResult[0]["featured"], Config::MIN_SEARCH_RESULT_COUNT);

    $categoryResult = $productModel->getProductCategoryByKeyword($serach, Config::MIN_SEARCH_RESULT_COUNT);

    if (! empty($productResult)) {
        ?>
<div id="search-list">
	<div class="search-section">
		<label>Featured</label>
	
	 <?php
        foreach ($featuredProductResult as $k => $v) {
            ?> 
	<div class="product-row">
			<img class="image-search-result"
				src="<?php echo $featuredProductResult[$k]["image"];?>
		">

			<div class="description"><?php echo $featuredProductResult[$k]["name"];?><br /><?php echo $featuredProductResult[$k]["description"];?></div>
		</div>
	
	<?php
        }
        ?>
    </div>
<?php
    }
    ?>
	<?php
    if (! empty($productResult)) {
        ?>
	<div class="search-section">
		<label>Products</label>
	<?php
        foreach ($productResult as $k => $v) {
            ?>
	<div class="product-row">
			<img class="image-search-result"
				src="<?php echo $productResult[$k]["image"];?>">

			<div class="description"><?php echo $productResult[$k]["name"];?><br /><?php echo $productResult[$k]["description"];?></div>
		</div>
	<?php
        }
        ?>
    </div>
<?php
    }
    ?><?php if (! empty($categoryResult)) {?>
	<div class="category search-section">
		<label>Category</label>
    <?php foreach ($categoryResult as $i => $s) {?>
	<div class="product-row">
			<img class="image-search-result"
				src="<?php echo $categoryResult[$i]["image"];?>"> <?php echo $categoryResult[$i]["name"];?>
	</div>
	<?php
        }
        ?> 
    <?php
    }
    ?></div>
</div>
<?php }?>
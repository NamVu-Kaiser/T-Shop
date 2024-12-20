<?php

require_once __DIR__ . '/shares/header.php';
require_once '../controllers/ProductController.php';
require_once '../controllers/CategoryController.php';

$categoryController = new CategoryController($pdo);
$categories = $categoryController->GetAllCategories();

$productController = new ProductController($pdo);
$products = $productController->GetAllProducts();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh mục sản phẩm</title>
    <link rel="stylesheet" href="/T-Shop/media/css/index.css">
   
</head>
<body>

     <div class="category-list">
          <h2>DANH MỤC</h2>
          <?php foreach($categories as $category): ?>
               <ul>
                    <li>
                         <a href="products/product_category.php?id=<?php echo $category['id']; ?>"><?php echo $category['name']; ?></a>
                    </li>
               </ul>
          <?php endforeach; ?>
     </div>


    <div class="product-list">
        <?php foreach($products as $product): ?>
            <a style="color:black" href="products/product_detail.php?id=<?php echo $product['id']; ?>" class="product-item-link">
                <div class="product-item">
                    <div class="product-item-content">
                        <img style="width:190px;height:220px" src="<?php echo $product['product_image']; ?>" alt="<?php echo $product['name']; ?>">
                        <h4><?php echo $product['name']; ?></h4>
                        <p>Giá: <?php echo number_format($product['price'], 0, '.', '.'); ?> VNĐ</p>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>


    <div class="footer-container">
        <?php require_once '../views/shares/footer.php';?>
    </div>

</body>
</html>
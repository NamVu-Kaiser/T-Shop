<?php
require_once '../shares/header.php';
require_once '../../controllers/ProductController.php';

$productController = new ProductController($pdo);
$productId = $_GET['id'];
$product = $productController->GetProductById($productId); // Store returned product
?>
<!DOCTYPE html>
<html>
<head>
    <title>Chi tiết sản phẩm</title>
</head>
<body>
    <?php if ($product): ?> <!-- Check if product exists -->
        <div class="product-container">
            <img style="height: 400px;width:350px;" class="product-image" src="<?php echo $product['product_image']; ?>" alt="<?php echo $product['name']; ?>">
            <div class="product-details">
                <h2 class="product-name"><?php echo $product['name']; ?></h2>
               <p class="product-price">Giá: <?php echo number_format($product['price'], 0, '.', '.'); ?> VNĐ</p>
                <p class="product-quantity">Số lượng: <?php echo $product['quantity']; ?></p>
                <div class="buttons">
                    <button class="btn btn-secondary">Thêm vào giỏ hàng</button>
                    <button class="btn">Mua ngay</button>
                </div> 
                
            </div>
        </div>
    <?php else: ?>
        <p>Không tìm thấy sản phẩm.</p>
    <?php endif; ?>
</body>
</html>

<?php 
require_once __DIR__ . '/../models/ProductModel.php';

class ProductController {
    private $productModel;

    public function __construct($pdo) {
        $this->productModel = new ProductModel($pdo);
    }

    public function GetAllProducts() {
        $listProducts = $this->productModel->getAllProducts();
        if(!$listProducts)
            return null;
        return $listProducts;
    }

    public function GetProductById($id) {
        $product = $this->productModel->getProductById($id);
        if(!$product)
            return null;
        return $product;
    }

    public function GetProductByCategory($categoryId) {
        $products = $this->productModel->getProductByCategory($categoryId);
        if(!$products)
            return null;
        return $products;
    }
}
?>
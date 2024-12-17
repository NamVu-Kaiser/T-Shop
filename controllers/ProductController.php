<?php 
require_once __DIR__ . '/../models/ProductModel.php';

class ProductController {
    private $productModel;

    public function __construct($pdo) {
        $this->productModel = new ProductModel($pdo);
    }

    public function GetAllProducts() {
        $products = $this->productModel->getAllProducts();
        return $products;
    }

     public function GetProductById($id) {
          $product = $this->productModel->getProductById($id);
          if ($product) {
               return $product;
          } else {
               return null;
          }
     }

    public function GetProductByCategory($categoryId) {
        $products = $this->productModel->getProductByCategory($categoryId);
        if (!empty($products)) {
            echo json_encode($products);
        } else {
            echo json_encode(['message' => 'Không tìm thấy sản phẩm']);
        }
    }
}
?>
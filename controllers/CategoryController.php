<?php 
    require_once __DIR__ . '/../models/CategoryModel.php';
    class CategoryController{
        private $categoryModel;

        public function __construct($pdo){
            $this->categoryModel = new CategoryModel($pdo);
        }

        public function GetAllCategories() {
            $cate = $this->categoryModel->GetAllCategories();
            return $cate;
        }   
}
?>
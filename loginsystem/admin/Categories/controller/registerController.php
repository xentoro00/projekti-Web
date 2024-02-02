<?php
include_once './repository/productRepository.php';
include_once './models/product.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['name']) ){
        echo "Fill all fields!";
    }else{
        $name = $_POST['name'];     

        $category  = new Category($name);
        $categoryRepository = new CategoryRepository();

        $categoryRepository->insertProduct($category);


    }
}



?>
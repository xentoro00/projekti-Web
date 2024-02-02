<?php
include_once './repository/productRepository.php';
include_once './models/product.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['name']) || empty($_POST['description']) || empty($_POST['price']) || empty($_FILES['image']) || empty($_POST['category'])){
        echo "Fill all fields!";
    }else{
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $image = $_FILES["image"];
        $category = $_POST['category'];        

        $product  = new Product($name,$description,$price,$image,$category);
        $productRepository = new ProductRepository();

        $productRepository->insertProduct($product);


    }
}



?>
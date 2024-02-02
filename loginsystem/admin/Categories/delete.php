<?php

$categoryId = $_GET['id'];
include_once './repository/categoryRepository.php';



$categoryRepository = new CategoryRepository();

$categoryRepository->deleteCategory($categoryId);

header("location:dashboard.php");


?>
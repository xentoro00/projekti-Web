<?php

$aboutId = $_GET['id'];
include_once './repository/aboutRepository.php';



$aboutRepository = new AboutRepository();

$aboutRepository->deleteAbout($aboutId);

header("location:dashboard.php");


?>
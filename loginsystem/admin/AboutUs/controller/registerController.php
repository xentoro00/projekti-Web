<?php

include_once './repository/aboutRepository.php';  // Include About class file here
include_once './controller/registerController.php';
include_once './models/about.php';  // Include About class file here


if (isset($_POST['aboutBtn'])) {
    if (empty($_POST['name']) || empty($_POST['position']) || empty($_FILES['image']['name'])) {
        echo "<script>alert('Fill all fields!');</script>";
    } else {
        $aboutRepository = new AboutRepository();
        
        $name = $_POST['name'];
        $position = $_POST['position'];
        $image = $_FILES['image'];

        $about = new About($image, $name, $position);
        $aboutRepository->insertAbout($about);
    }
}

?>

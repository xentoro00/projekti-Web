<?php
session_start();
if (strlen($_SESSION['adminid'] == 0)) {
    header('location: logout.php');
} else {
    $aboutId = $_GET['id'];
    include_once './repository/aboutRepository.php';
    $aboutRepository = new AboutRepository();
    $about  = $aboutRepository->getAboutById($aboutId);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css?<?php echo time(); ?>">
    <style>
        form select {
            border: 1px solid black;
            border-radius: 10px;
            padding: 20px 100px;
            font-size: 1rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="admin-product-form-container centered">
            <form action="" method="post" enctype="multipart/form-data">
                <h3 class="title">Update About Us</h3>
                <input type="text" name="id" value="<?= $about['id'] ?>" readonly> <br> <br>
                <input type="text" class="box" name="name" value="<?php echo $about['name']; ?>" placeholder="Enter the name">
                <input type="text" class="box" name="position" value="<?php echo $about['position']; ?>" placeholder="Enter the position">
                <input type="file" class="box" name="image" accept="image/png, image/jpeg, image/jpg">
                <input type="submit" value="Update About Us" name="editBtn" class="btn">
                <a href="admin_page.php" class="btn">Go back!</a>
            </form>
        </div>
    </div>

    <?php

    if (isset($_POST['editBtn'])) {
        $id = $about["id"];
        $name = $_POST['name'];
        $position = $_POST['position'];
        $image = $_FILES['image'];

        $aboutRepository->updateAbout($id, $name, $position, $image);
        header("location: dashboard.php");
    }

    ?>
</body>

</html>

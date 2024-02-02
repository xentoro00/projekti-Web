<?php
session_start();
if (strlen($_SESSION['adminid']==0)) {
   header('location:logout.php');
} else{
   $categoryId = $_GET['id'];
   include_once './repository/categoryRepository.php';
   $categoryRepository = new CategoryRepository();
   $category  = $categoryRepository->getCategoryById($categoryId);
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
     form select{
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
         <h3 class="title">update the category</h3>
         <input type="text" name="id"  value="<?=$category['id']?>" readonly> <br> <br>
         <input type="text" class="box" name="name" value="<?php echo $category['kategoria']; ?>" placeholder="enter the category name">
         <input type="submit" value="update category" name="editBtn" class="btn">
         <a href="admin_page.php" class="btn">go back!</a>
      </form>
      
   </div>
</div>

<?php 

if(isset($_POST['editBtn'])){
   $id = $category["id"];
   $name = $_POST['name'];

   $categoryRepository->updateCategory($id,$name);
   header("location:dashboard.php");
}

?>
</body>
</html>
<?php session_start()?>
<?php 
// if (!isset($_SESSION['admin_id'])) {
//    header('location: ../dashboard/dashboard.php');
//    }
   //  include("./product.php");

   //  if(isset($_POST["add_product"])) {
   //      $createProduct = new Product;
   //    $createProduct->addProduct($_FILES,$_POST);
      
   // }
   // if (isset($_GET["delete"])) {
   //    $Product->deleteProduct();
      
   // }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Add product</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <!-- <link rel="stylesheet" href="../css/styles.css?<?php echo time(); ?>"> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

      <style>
         *{
    margin: 0;
    padding: 0;
  font-family: "Montserrat", sans-serif;
}
         main{
            margin-left:20rem;
         }
         .container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
}

.admin-product-form-container {
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    border-radius: 4px;
}

.admin-product-form-container h3 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

.box {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.btn {
    background-color: #007bff;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

.btn:hover {
    background-color: #0056b3;
}

/* Style file input */
input[type="file"] {
    border: none;
}

.custom-file-upload {
    background-color: #007bff;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    display: inline-block;
}

.custom-file-upload:hover {
    background-color: #0056b3;
}
form div {
   
   display: flex;
    gap: 20px;
}
      </style>
    </head>
<body>
<?php include_once './controller/registerController.php';?>
<?php include_once('../includes/sidebar.php');?>
<main>
      <div class="container">
         <div class="admin-product-form-container">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
               <h3>ADD ABOUT</h3>
               <input type="text" placeholder="Enter name" name="name" class="box">
               <input type="text" placeholder="Enter position" name="position" class="box">
               
               <input type="file" accept="image/png, image/jpeg, image/jpg" name="image" class="box">
               <input type="submit" class="btn" name="aboutBtn" value="Add product">
            </form>
         </div>
      </div>
</main>
<?php  ?>
</body>
</html>


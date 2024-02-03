<?php session_start()?>
<?php 
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
        <link rel="stylesheet" href="../css/style.css?<?php echo time(); ?>">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

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
<?php include_once './controller/registerController.php';?>
<?php include_once('../includes/sidebar.php');?>
<main>
      <div class="container">
         <div class="admin-product-form-container">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
               <h3>add a new product</h3>
               <input type="text" placeholder="enter product name" name="name" class="box">
               <input type="text" placeholder="enter product description" name="description" class="box">
               <input type="number" step="0.01" min="1"  placeholder="enter product price" name="price" class="box">
               <label for="category">Category:</label>
         <select name="category" required>
            <?php
               $conn = mysqli_connect('localhost','root','','onlinestore');
               $query = "SELECT * FROM categories";
               $result = mysqli_query($conn, $query);
               while ($row = mysqli_fetch_assoc($result)) {
                  echo "<option value='{$row['id']}'>{$row['kategoria']}</option>";
               }
            ?>
         </select>               <input type="file" accept="image/png, image/jpeg, image/jpg" name="image" class="box">
               <input type="submit" class="btn" name="registerBtn" value="add product">
            </form>
         </div>
      </div>
</main>
<?php include('../includes/footer.php');?>
<?php  ?>
</body>
</html>


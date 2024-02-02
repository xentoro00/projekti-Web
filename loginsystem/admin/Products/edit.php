<?php
session_start();
if (strlen($_SESSION['adminid']==0)) {
   header('location:logout.php');
} else{
   $productId = $_GET['id'];
   include_once './repository/productRepository.php';
   $productRepository = new ProductRepository();
   $product  = $productRepository->getProductById($productId);
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
         <h3 class="title">update the product</h3>
         <input type="text" name="id"  value="<?=$product['ProduktID']?>" readonly> <br> <br>
         <input type="text" class="box" name="name" value="<?php echo $product['Emri']; ?>" placeholder="enter the product name">
         <input type="text" class="box" name="description" value="<?php echo $product['Pershkrimi']; ?>" placeholder="enter the product description">
         <input type="number" min="0" class="box" name="price" value="<?php echo $product['Cmimi']; ?>" placeholder="enter the product price">
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
         </select>
         <input type="file" class="box" name="image"  accept="image/png, image/jpeg, image/jpg">
         <input type="submit" value="update product" name="editBtn" class="btn">
         <a href="admin_page.php" class="btn">go back!</a>
      </form>
      
   </div>
</div>

<?php 

if(isset($_POST['editBtn'])){
   $id = $product["ProduktID"];
   $name = $_POST['name'];
   $description = $_POST['description'];
   $price = $_POST['price'];
   $category = $_POST['category'];
   $image = $_FILES['image'];

   $productRepository->updateProduct($id,$name,$description,$price,$category,$image);
   header("location:dashboard.php");
}

?>
</body>
</html>
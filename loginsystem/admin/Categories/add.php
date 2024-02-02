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
       main{
            margin-left:250px;
            padding-top:100px;
        }
   </style>
    </head>
<body>


<?php include_once './controller/registerController.php';?>
      <?php include_once('../includes/sidebar.php');?>
            <main>
              <div class="crud">
                 
                 <div class="container">
                    
                    <div class="admin-product-form-container">
                       <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                        <h3>add a new product</h3>
                        <input type="text" placeholder="enter product name" name="name" class="box">
                        <input type="text" placeholder="enter product description" name="description" class="box">
                        <input type="number" step="0.01" min="1"  placeholder="enter product price" name="price" class="box">
                        <input type="number" step="1" min="1"  placeholder="Category ID" name="category" class="box">
                        <input type="file" accept="image/png, image/jpeg, image/jpg" name="image" class="box">
                        <input type="submit" class="btn" name="registerBtn" value="add product">
                     </form>
                     
                  </div>

   <div class="product-display display">
      <table class="product-display-table">
         <thead>
            <tr>
               <th>product image</th>
               <th>product name</th>
               <th>product description</th>
               <th>product price</th>
               <th>Category name</th>
               <th>action</th>
            </tr>
         </thead>
         <?php 
             include_once './repository/productRepository.php';

             $productRepository = new ProductRepository();

             $products = $productRepository->getAllProducts();

             foreach($products as $product){
            ?>
            <tr>
               <td><img src='data:image/jpeg;base64,<?php echo $product["Foto"]?>' height="100" alt=""></td>
               <td><?php echo $product["Emri"]?></td>
               <td><?php echo $product["Pershkrimi"] ?></td>
               <td>$<?php echo $product["Cmimi"]?></td>
               <td><?php echo $product["KategoriID"] ?></td>
               <td>
               <a href='edit.php?id=<?php echo $product["ProduktID"]?>' class="btn"> edit  <i class="fas fa-edit"></i></a>
               <a href='delete.php?id=<?php echo $product["ProduktID"]?>' class="btn"> delete  <i class="fas fa-trash"></i></a>
               </td>
            </tr>
            <?php  } ?>
         </table>
      </div>
      
   </div>
</div>
</main>
<?php include('../../includes/footer.php');?>
<?php  ?>

<script>
   
   // document.getElementsByName("product_price")[0].addEventListener('blur', function(event) {
   //    let input = parseFloat(event.target.value);
   //    if (!isNaN(input)) {
   //       event.target.value = input.toFixed(2);
   //    }
   //  });
</script>
</body>
</html>


<?php session_start();
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
// if(isset($_GET['id']))
// {
// $adminid=$_GET['id'];
// $msg=mysqli_query($con,"delete from products where ProduktID='$adminid'");
// if($msg)
// {
// echo "<script>alert('Data deleted');</script>";
// }
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
        <title>Manage products | Registration and Login System</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/style.css?<?php echo time(); ?>" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <style> 
        
        @media (max-width: 700px) {
            html{

                min-width:700px;
            }
        }
            </style>
    </head>
    <body>
         <?php include_once('../includes/sidebar.php');?>
                <main>
                <div class="container-fluid">
        <div class="page-header">
            <h1 class="mt-4">Manage Products</h1>
        </div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Manage Products</li>
        </ol>
        <div class="card">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Registered User Details
            </div>
            <div class="card-body">
                <table>
                    <thead>
                        <tr>
                            <th>Sno.</th>
                            <th>Emri</th>
                            <th>Pershkrimi</th>
                            <th>Kategoria</th>
                            <th>Cmimi</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                             include_once './repository/productRepository.php';

                             $productRepository = new ProductRepository();
                
                             $products = $productRepository->getAllProducts();
                
                             foreach($products as $product){
                        ?>
                            <tr>
                                <td><?php echo $product["ProduktID"]; ?></td>
                                <td><?php  echo $product['Emri']; ?></td>
                                <td><?php echo $product['Pershkrimi']; ?></td>
                                <td>
                                    <?php $conn = mysqli_connect('localhost','root','','onlinestore');
                                         $categoryID = $product['KategoriID'];
                                        $categoryRow = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM categories WHERE id = '$categoryID'"));
                                    echo $categoryRow !== null ? $categoryRow["kategoria"] : 'Category not found!';
                                    ?>
                                </td>
                                <td><?php  echo $product['Cmimi']; ?></td>
                                <td><img src="data:image/jpeg;base64,<?php echo $product['Foto']; ?>" alt=""></td>
               <td>
               <a href='edit.php?id=<?php echo $product["ProduktID"]?>' class="btn"> edit  <i class="fas fa-edit"></i></a>
               <a href='delete.php?id=<?php echo $product["ProduktID"]?>' class="btn red"> delete  <i class="fas fa-trash"></i></a>
               </td>
                            </tr>
                        <?php 
                           } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
                </main>
  <?php include('../includes/footer.php');?>
        
    </body>
</html>
<?php } ?>
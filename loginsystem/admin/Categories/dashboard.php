<?php session_start();
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
   ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Manage categories | Registration and Login System</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/style.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <style> 
        
            </style>
    </head>
    <body>
         <?php include_once('../includes/sidebar.php');?>
                <main>
                <div class="container-fluid">
        <div class="page-header">
            <h1 class="mt-4">Manage Categories</h1>
        </div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Manage Categories</li>
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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                             include_once './repository/categoryRepository.php';

                             $categoryRepository = new CategoryRepository();
                
                             $categories = $categoryRepository->getAllCategories();
                
                             foreach($categories as $category){
                        ?>
                            <tr>
                                <td><?php echo $category["id"]; ?></td>
                                <td><?php  echo $category['kategoria']; ?></td>
                                <td class="action-icons">
                                    <a href="./edit.php?id=<?php echo $category['id']; ?>"><i class="fas fa-edit"></i></a>
                                    <a href="./delete.php?id=<?php echo $category['id']; ?>" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
<?php session_start();
// if (!isset($_SESSION['admin_id'])) {
//     header('location: ../dashboard/dashboard.php');
//     }
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
        <!-- <link href="../css/styles.css?" rel="stylesheet" /> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styles.css? <?php echo time(); ?>">
        <style> 
        
        @media (max-width: 700px) {
            html{

                min-width:700px;
            }
        }
        /* Reset some default browser styles */
/* Reset some default browser styles */
*{
    margin: 0;
    padding: 0;
  font-family: "Montserrat", sans-serif;
}

/* Basic styling for the table */
.custom-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.custom-page-header {
    margin-bottom: 20px;
}

.custom-heading {
    font-size: 24px;
    color: #333;
}
/* Breadcrumb styling */
.custom-breadcrumb {
    background-color: #343a4091;
    border-radius: 4px;
    margin-bottom: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: fit-content;
    padding: 10px 20px;
}

.custom-breadcrumb li{
    display: inline;
    color: #fff;
    font-size: 16px;
}

.custom-breadcrumb li::after {
    content: "/";
    color: #fff;
    margin: 0 8px;
}

.custom-breadcrumb li:last-child::after {
    content: "";
}

.custom-card {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.custom-card-header {
    background-color: #007bff;
    color: #fff;
    padding: 15px;
}

.custom-card-body {
    padding: 20px;
}

.custom-table {
    width: 100%;
    border-collapse: collapse;
}

.custom-table th, .custom-table td {
    border: 1px solid #dee2e6;
    padding: 12px;
    text-align: left;
}

.custom-table th {
    background-color: #007bff;
    color: #fff;
}

.custom-table tbody tr:nth-child(even) {
    background-color: #f8f9fa;
}

.custom-table tbody tr:hover {
    background-color: #e0e0e0;
}

.custom-btn {
    display: inline-block;
    padding: 10px 15px;
    margin-right: 5px;
    text-decoration: none;
    color: #fff;
    background-color: #007bff;
    border: 1px solid #007bff;
    border-radius: 4px;
}

.custom-btn.red {
    background-color: #dc3545;
    border: 1px solid #dc3545;
}

/* Add more styling for icons if needed */
.icon-table, .icon-edit, .icon-trash {
    margin-right: 5px;
}

.icon-edit::before {
    content: '\1F589'; 
}

.icon-trash::before {
    content: '\1F5D1'; 
}
td img {
    height:5rem;
}


            </style>
    </head>
    <body>
         <?php include_once('../includes/sidebar.php');?>
             <main>
    <div class="custom-container">
        <div class="custom-page-header">
            <h1 class="custom-heading">AboutUs Management</h1>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="custom-breadcrumb">
                <li class="breadcrumb-item"><a href="add.php">ADD STAFF</a></li>
                <li class="breadcrumb-item active">Manage AboutUs</li>
            </ol>
        </nav>
        <div class="custom-card">
            <div class="custom-card-header">
                <i class="icon-table"></i>
                About Details
            </div>
            <div class="custom-card-body">
                <table class="custom-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                             include_once './repository/aboutRepository.php';

                             $aboutRepository = new AboutRepository();
                
                             $abouts = $aboutRepository->getAllAbout();
                
                             foreach($abouts as $about){
                        ?>
                            <tr>
                                <td><?php echo $about["id"]; ?></td>
                                <td><img src="data:image/jpeg;base64,<?php print_r($about['image']); ?>" alt=""></td>
                                <td><?php echo $about['name']; ?></td>
                                <td><?php echo $about['position']; ?></td>
                                <td>
                                    <a href='edit.php?id=<?php echo $about["id"]?>' class="btn custom-btn">Edit <i class="icon-edit"></i></a>
                                    <a href='delete.php?id=<?php echo $about["id"]?>' class="btn custom-btn red">Delete <i class="icon-trash"></i></a>
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

        
    </body>
</html>
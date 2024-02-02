<?php session_start();
include_once('../includes/config.php');
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
        <title>Admin Dashboard | Registration and Login System </title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <style>
            * {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        html{
            min-width: 400px;
        }
        .container {
            padding: 0;
            margin: 0;
            /* margin-top: 1.5rem; */
        }
        .container h1 {
            padding:20px;
        }
        .breadcrumb {
            list-style: none;
            padding: 0;
            margin: 0;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: .25rem;
            display: flex;
        }

        .breadcrumb-item {
            padding: .75rem;
            margin: 0;
        }

        .breadcrumb-item.active {
            color: #007bff;
        }

        .row {
            margin: 0;
        }
        .card-container{
            display:flex;
            padding: 0 15px;

        }
        

        .card {
            position: relative;
            max-width:300px;
            display: flex;
            flex-direction: column;
            min-width: 0;
            background-color: #007bff;
            word-wrap: break-word;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 0.25rem;
            color: #fff ;    
            margin-right: 1.5rem;
            margin-bottom: 1.5rem;
            padding: 10px 20px;
        }

        

        .card-body {
            flex: 1 1 auto;
            padding: 1.25rem;
        }

        .card-footer {
            border-top: 1px solid rgba(0, 0, 0, 0.125);
            padding: 0.75rem 1.25rem;
            display: flex;
            align-items: center ;
            justify-content: space-between ;
            flex-wrap: wrap;
        }
        .card-footer a {
            font-size: 0.875rem;
            color: #fff ;
            position: relative;
            display: block;
            width: 100%;
            height: 100%;
            text-decoration: none;

        }
        .card-footer div {
            font-size: 0.875rem;
            color: #fff ;

        }

        @media (max-width: 991px) {
            html {
            font-size: 55%;
        }

}

@media (max-width: 768px) {
    .product-display {
    overflow-y: scroll;
  }

    .product-display .product-display-table {
    width: 80rem;
  }
}
@media (max-width: 700px) {
    .card-container{
        flex-direction: column;
    }
}
@media (max-width: 450px) {
    html {
    font-size: 50%;
  }
}
        
</style>
</head>
<body>
<?php include_once('../includes/sidebar.php');?>
<main>
    <div class="container">
        <h1>Dashboard</h1>
        <div class="row">
            <div class="card-container">
                <div class="card">
                    <?php
                        $query=mysqli_query($con,"select ProduktID from products");
                        $totalproducts=mysqli_num_rows($query);
                    ?>
                    <div class="card-body">Total Registered Products
                        <span style="font-size:1.5rem;"> <?php echo $totalproducts;?></span>
                    </div>
                    <div class="card-footer">
                        <a href="../Products/dashboard.php">View Details</a>
                        <div>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <?php
                        $query=mysqli_query($con,"select * from contact_messages");
                        $totalcontacts=mysqli_num_rows($query);
                    ?>
                    <div class="card-body">Total Registered Contacts
                        <span style="font-size:1.5rem;"> <?php echo $totalcontacts;?></span>
                    </div>
                    <div class="card-footer">
                        <a href="../Contacts/dashboard.php">View Details</a>
                        <div>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <?php
                        $query=mysqli_query($con,"select * from contact_messages");
                        $totalcontacts=mysqli_num_rows($query);
                    ?>
                    <div class="card-body">Total Registered Contacts
                        <span style="font-size:1.5rem;"> <?php echo $totalcontacts;?></span>
                    </div>
                    <div class="card-footer">
                        <a href="../Contacts/dashboard.php">View Details</a>
                        <div>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
             <?php include_once('../includes/footer.php'); ?>
        
    </body>
</html>
<?php } ?>

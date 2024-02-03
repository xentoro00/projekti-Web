<?php session_start();
include_once './database/databaseConnection.php';
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_GET['id']))
{
$messageID=$_GET['id'];
$msg=mysqli_query($con,"delete from contact_messages where MessageID='$messageID'");
if($msg)
{
echo "<script>alert('Data deleted');</script>";
}
}
   ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Manage Contacts</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/style.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    </head>
    <body class="sb-nav-fixed">
        <div id="layoutSidenav">
         <?php include_once('../includes/sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Manage Users</h1>
                        <ol class="breadcrumb mb-4">
                        </ol>
            
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Users 
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                             <th>Sno.</th>
                                  <th>Username</th>
                                  <th>Password </th>
                                  <th>Action</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                              <?php                          
             include_once './repository/userRepository.php';

             $userRepository = new UserRepository();

             $users = $userRepository->getAllUsers();

             foreach($users as $user){
             ?>
                              <tr>		
     <td><?php echo $user["User_ID"]; ?></td>
        <td><?php echo $user['Username']; ?></td>
        <td>Hidden</td> 
        <td>
            <a href='delete.php?id=<?php echo $user["User_ID"]; ?>'>Delete</a>
        </td>
                              </tr>
                              <?php  }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
  <?php include('../includes/footer.php');?>
            </div>
        </div>
        
    </body>
</html>
<?php } ?>
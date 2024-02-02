<?php session_start(); 
include_once('../includes/config.php');
// Code for login 
if(isset($_POST['login']))
{
  $adminusername=$_POST['username'];
  $pass=$_POST['password'];
$ret=mysqli_query($con,"SELECT * FROM admin WHERE username='$adminusername' and password='$pass'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="dashboard.php";
$_SESSION['login']=$_POST['username'];
$_SESSION['adminid']=$num['id'];
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
$extra="index.php";
echo "<script>window.location.href='".$extra."'</script>";
exit();
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
        <title>Admin Login | Registration and Login System</title>
        <link href="..//css/login.css" rel="stylesheet" />
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
        <div class="container" id="container">
                <div class="form-container sign-in">
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                        <h1>Sign In as Admin</h1>
                        <div class="social-icons">
                            </div>
                            <input type="text" name="username" placeholder="Username">
                            <input type="password" name="password" placeholder="Password">
                            <button name="login">Sign In</button>
                            <a href="../../login.php">Go Back!</a>
                        </form>
                    </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>


<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="login.css?v=<?php echo time(); ?>">
        <title>Account</title>
    </head>
    
    <body>
<?php 
session_start();
if(isset($_GET['auth']) && $_GET['auth'] == 1)   
{
    header("Location: ./index.php");
}
include 'header.php';
include 'popupMsg.php'; 
?>

    <main>

        <div class="container <?php if(isset($_GET["errCode"])) echo $_GET["errCode"] ? 'active' : ''?>" id="container">
            <div class="form-container sign-up">
                <form action="./checkSignup.php" method="post">
                    <h1>Create Account</h1>
                    <div class="social-icons">
                        
                        </div>
                        <input type="text" name="username" placeholder="Username">
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Password">
                        <label for="DoB">Date of Birth</label>
                        <input type="date" name="DoB" placeholder="Date of Birth"> 
                        <label for="gender">Gender:</label>
                        <select id="gender" name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                        
                        <button>Sign Up</button>
                        <a href="#" id="toggleLogin">If you have an account <strong>Log In</strong></a>
                    </form>
                </div>
                <div class="form-container sign-in">
                    <form action="./checkLogin.php" method="post">
                        <h1>Sign In</h1>
                        <div class="social-icons">
                            </div>
                            <input type="text" name="username" placeholder="Username">
                            <input type="password" name="password" placeholder="Password">
                            <a href="#">Forget Your Password?</a>
                            <a href="./loginsystem/admin">Log In as Admin</a>
                            <button>Sign In</button>
                            <a href="#" id="toggleSignup">If you do not have an account <strong>Register</strong></a>
                        </form>
                    </div>
                </div>
            </main>
            <?php include 'footer.php'; ?>
            </body>
        <script src="login.js?<?php echo time(); ?>"></script>

</html>
<?php
// Lidhja me bazën e të dhënave (përdorim mysqli për këtë shembull)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlinestore";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$DoB = $_POST['DoB'];
$gender = $_POST['gender'];

$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
if (strlen($username) < 4) {
    goToLogin(1);
}

if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
    goToLogin(2);
}

if (strlen($password) < 8) {
    goToLogin(3);
}
if (strlen($Dob) < 1) {
    goToLogin(4);
}else{

    list($year, $month, $day) = explode('-', $DoB);
    
    if (!checkdate($month, $day, $year)) {
        goToLogin(4);
    } 
}


$sql = "INSERT INTO users (Username, Password, Email, Gender, Dob) VALUES ('$username', '$hashedPassword', '$email', '$gender', '$DoB')";

if ($conn->query($sql) === TRUE) {
    echo "Message sent successfully";
    
    header("Location: ./login.php");
    die();
    $conn->close();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
function goToLogin($errCode){
    header("Location: ./login.php?errCode=$errCode");
    die();
    $conn->close();
}
?>

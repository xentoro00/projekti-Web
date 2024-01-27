<?php
session_start();
// Lidhja me bazën e të dhënave (përdorim mysqli për këtë shembull)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlinestore";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL query to check if the username exists
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($query);
    if ($result) {
        $row = $result->fetch_assoc();
        // Access the data using array syntax
        echo $username;
        $hashedPasswordFromDB = $row['Password'];
       
        // Verify the password
        if (password_verify($password,$hashedPasswordFromDB)) {
            session_start();
            $_SESSION['authenticated'] = true;
            // You may store other user-related information in the session as needed
            $_SESSION['uID'] = $row['User_ID'];
            $_SESSION['username'] = $username;
            header("Location: ./login.php?auth=1&username=$username");
        } else {
            
            echo "Invalid password!";
        }
    } else {
        
        echo "Username not found";
    }
}

die();
$conn->close();
?>

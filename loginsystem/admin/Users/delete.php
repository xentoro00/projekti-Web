<?php
$userID = $_GET['id']; // Updated to use 'id' instead of 'User_ID'

include_once './repository/userRepository.php';

$userRepository = new UserRepository();

$userRepository->deleteUsers($userID);

header("location: dashboard.php");
?>

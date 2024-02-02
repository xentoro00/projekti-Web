<?php

$conn = mysqli_connect('localhost','root','','onlinestore');

function alert($e){
    echo "<script>alert('".$e."')</script>";
    }
?>
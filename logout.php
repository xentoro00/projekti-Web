<?php

$origin = $_GET['originUrl'];
session_start();
session_unset();
session_destroy();

header("Location: ./".$origin."");
?>
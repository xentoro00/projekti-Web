<?php

$reportId = $_GET['id'];
include_once './repository/reportRepository.php';

$reportRepository = new ReportRepository();

$reportRepository->deleteReport($reportId);

header("location:dashboard.php");


?>
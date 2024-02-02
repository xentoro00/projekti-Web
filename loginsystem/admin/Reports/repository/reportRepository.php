<?php 
include_once './database/databaseConnection.php';

class ReportRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


    function insertReport($report){

        $conn = $this->connection;

        $adminId = $report->getAdminId();
        $reportType = $report->getReportType();
        $report = $report->getReport();
        $time = $report->getTime();
       
        $sql = "INSERT INTO reports (adminID, reportType, report, Time) VALUES (?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$adminId, $reportType, $report, $time]);

        echo "<script> alert('Report has been inserted successfuly!'); </script>";

    }

    function getAllReports(){
        $conn = $this->connection;

        $sql = "SELECT * FROM reports";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getReportById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM reports WHERE reportID='$id'";

        $statement = $conn->query($sql);
        $report = $statement->fetch();

        return $report;
    }
    function deleteReport($id){
        $conn = $this->connection;

        $sql = "DELETE FROM reports WHERE reportID=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   } 
}



?>
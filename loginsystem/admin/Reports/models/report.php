<?php

class Contact{
    private $adminId;
    private $reportType;
    private $report;
    private $time;


    function __construct($adminId,$reportType,$report, $time){
            $this->adminId = $adminId;
            $this->reportType = $reportType;
            $this->report = $report;
            $this->time = $time;
    }


   
    function getAdminId(){
        return $this->adminId;
    }
    function getReportType(){
        return $this->reportType;
    }
    function getReport(){
        return $this->report;
    }
    function getTime(){
        return $this->time;
    }
  
}

?>
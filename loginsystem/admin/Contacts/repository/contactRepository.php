<?php 
include_once './database/databaseConnection.php';

class ContactRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }

    function getAllContacts(){
        $conn = $this->connection;

        $sql = "SELECT * FROM contact_messages";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getContactById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM contact_messages WHERE id='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }
    function deleteContact($id){
        $conn = $this->connection;

        $sql = "DELETE FROM contact_messages WHERE MessageID=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   } 
}



?>
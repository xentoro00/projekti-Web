<?php 
include_once './database/databaseConnection.php';

class CategoryRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


    function insertCategory($category){
        $conn = $this->connection;

        $name = $category->getName();
        	
        $sql = "INSERT INTO categories (kategoria) VALUES (?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$category]);

        echo "<script> alert('Category has been inserted successfuly!'); </script>";

    }

    function getAllCategories(){
        $conn = $this->connection;

        $sql = "SELECT * FROM categories";

        $statement = $conn->query($sql);
        $categories = $statement->fetchAll();

        return $categories;
    }

    function getCategoryById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM categories WHERE id='$id'";

        $statement = $conn->query($sql);
        $category = $statement->fetch();

        return $category;
    }

    function updateCategory($id,$category){
         $conn = $this->connection;

         $sql = "UPDATE categories SET kategoria=? WHERE id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$category,$id]);

         echo "<script>alert('update was successful'); </script>";
    } 

    function deleteCategory($id){
        $conn = $this->connection;

        $sql = "DELETE FROM categories WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   } 
}

?>
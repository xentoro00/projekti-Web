<?php 
include_once './database/databaseConnection.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class ProductRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


    function insertProduct($product){
        $conn = $this->connection;

        $name = $product->getName();
        $description = $product->getDescription();
        $price = $product->getPrice();
        $image = $product->getImage();
        $category = $product->getCategory();
        	
        $sql = "INSERT INTO products (Emri,Pershkrimi,Cmimi,Foto,KategoriID) VALUES (?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$name,$description,$price,$image,$category]);

        $adminId = $_SESSION['adminid'];
        $productId = $conn->lastInsertId();
        $report = "Admin With ID=> '$adminId' Added Product: '$name' With Product Id: '$productId'";
        $this->insertReport("Add", $report);

        echo "<script> alert('Product has been inserted successfuly!'); </script>";
    }
  

    function getAllProducts(){
        $conn = $this->connection;

        $sql = "SELECT * FROM products";

        $statement = $conn->query($sql);
        $products = $statement->fetchAll();

        return $products;
    }

    function getProductById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM products WHERE ProduktID='$id'";

        $statement = $conn->query($sql);
        $product = $statement->fetch();

        return $product;
    }

    function updateProduct($id,$name,$description,$price,$category,$image){
        $conn = $this->connection;

        $Base64Img = $this->imgToBase64($image);

        $sql = "UPDATE products SET Emri=?, Pershkrimi=?, Cmimi=?, Foto=?, KategoriID=? WHERE ProduktID=?";

        $statement = $conn->prepare($sql);

        // $adminId = $_SESSION['adminid'];
        $statement->execute([$name,$description,$price,$Base64Img,$category,$id]);
        $report = "Admin With ID=> '$adminId' Updated Product: '$name' With Product Id: '$id'";
        $this->insertReport("Update", $report);

        echo "<script>alert('update was successful'); </script>";
    } 

    function deleteProduct($id){
        $conn = $this->connection;
    
        // Fetch the product first
        $product = $this->getProductById($id);
    
        if ($product) {
            $adminId = $_SESSION['adminid'];
            $productId = $product['ProduktID'];
            $name = $product['Emri'];
    
            $sql = "DELETE FROM products WHERE ProduktID=?";
            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
    
            $report = "Admin With ID=> '$adminId' Deleted Product: '$name' With Product Id: '$productId'";
            $this->insertReport("Delete", $report);
    
            echo "<script>alert('delete was successful'); </script>";
        } else {
            // Handle the case where the product is not found
            echo "<script>alert('Product not found.'); </script>";
        }
    }
   function imgToBase64($img){
        if (isset($img) && $img['error'] === UPLOAD_ERR_OK) {
            $fileContent = file_get_contents($img['tmp_name']);
            $image = base64_encode($fileContent);
            return $image;
        } else {
            echo "Error uploading file.";
        }
   }
   function insertReport($reportType, $reportMessage) {
    $conn = $this->connection;
    $adminId = $_SESSION['adminid'];
    $sql = "INSERT INTO reports (adminID, reportType, report) VALUES (?, ?, ?)";

    $statement = $conn->prepare($sql);

    $statement->execute([$adminId, $reportType, $reportMessage]);

    echo "<script> console.log('Report has been inserted successfully!'); </script>";
}
}

?>
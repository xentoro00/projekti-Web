<?php 
  session_start();
?>
<html>
    <head>
        <title>helo</title>
        <link rel="stylesheet" href="shop.css?v=<?php echo time(); ?>">
    <style>
        body{
            justify-content: normal !important;
        }
    </style>
    </head>
    <body>
    <?php include 'header.php'; ?>
    <?php include './includes/config.php'; ?>

    <main>
        <div class="product-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                     <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $id = $_POST['id'];
                            $uID = $_SESSION['uID'];
                            echo $id . "<br>" . $uID;
                            $sql = "INSERT INTO checkout (productID, userID) VALUES ('$id', '$uID')";

                            if ($con->query($sql) !== TRUE) {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                        }
                    if (isset($_GET["categoryID"])) {
                        $cID = $_GET["categoryID"];
                        $select = mysqli_query($con, "SELECT * FROM products WHERE KategoriID= '$cID '");
                    }else {
                     $select = mysqli_query($con, "SELECT * FROM products");
                }
                      while($row = mysqli_fetch_assoc($select)){ 
                     ?>
                   
                <div class="swiper-slide">
                    <form action="" method="post">
                        <div class="image-container">
                            <img src="data:image/jpeg;base64,<?php echo $row['Foto']; ?>" height="100" alt="Product <?php echo $row['ProduktID']; ?>">
                        </div>
                        <div class="title-container">
                            <h3><?php echo $row['Emri']; ?></h3>
                        </div>
                        <div class="description-container">
                            <?php echo $row['Pershkrimi']; ?>
                        </div>
                        <div class="price-container">
                            <h2><?php echo $row['Cmimi']; ?>€</h2>
                        </div>
                        <div class="addToCart-container">
                            <input type="hidden" name="id" value="<?php echo $row['ProduktID'] ?>">
                            <button type="submit">Add to Cart</button>
                        </div>
                    </form>
                </div> 
                <?php } ?>
                </div>
            </div>
        </div>
        
    </main>
    <?php include 'footer.php'; ?>

    </body>
</html>
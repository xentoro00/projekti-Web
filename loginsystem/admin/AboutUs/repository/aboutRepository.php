<?php
include_once './database/databaseConnection.php';

class AboutRepository {
    private $connection;

    function __construct() {
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }

    function insertAbout($about) {
        $conn = $this->connection;

        $image = $about->getImage();
        $name = $about->getName();
        $position = $about->getPosition();

        $sql = "INSERT INTO about (image, name, position) VALUES (?, ?, ?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$image, $name, $position]);

        echo "<script> alert('About information has been inserted successfully!'); </script>";
    }

    function getAllAbout() {
        $conn = $this->connection;

        $sql = "SELECT * FROM about";

        $statement = $conn->query($sql);
        $abouts = $statement->fetchAll();

        return $abouts;
    }

    function getAboutById($id) {
        $conn = $this->connection;

        $sql = "SELECT * FROM about WHERE id='$id'";

        $statement = $conn->query($sql);
        $about = $statement->fetch();

        return $about;
    }

    function updateAbout($id, $name, $position, $image) {
        $conn = $this->connection;

        $Base64Img = $this->imgToBase64($image);

        $sql = "UPDATE about SET name=?, image=?, position=? WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$name, $Base64Img, $position, $id]);

        echo "<script>alert('Update was successful');</script>";
    }

    function deleteAbout($id) {
        $conn = $this->connection;

        $sql = "DELETE FROM about WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('Delete was successful');</script>";
    }

    function imgToBase64($img) {
        if (isset($img) && $img['error'] === UPLOAD_ERR_OK) {
            $fileContent = file_get_contents($img['tmp_name']);
            $image = base64_encode($fileContent);
            return $image;
        } else {
            echo "Error uploading file.";
        }
    }
}
?>

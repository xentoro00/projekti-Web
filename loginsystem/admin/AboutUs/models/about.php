<?php
class About {
    private $image;
    private $name;
    private $position;

    function __construct($image, $name, $position) {
        $this->name = $name;
        $this->position = $position;
        $this->image = $image;
    }

    function getName() {
        return $this->name;
    }

    function getPosition() {
        return $this->position;
    }

    function getImage() {
        if (isset($this->image) && $this->image['error'] === UPLOAD_ERR_OK) {
            $fileContent = file_get_contents($this->image['tmp_name']);
            $image = base64_encode($fileContent);
            return $image;
        } else {
            return "Error uploading file.";
        }
    }
}
?>

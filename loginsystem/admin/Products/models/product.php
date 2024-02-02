<?php

class Product{
    private $name;
    private $description;
    private $price;
    private $image;
    private $category;

    function __construct($name,$description,$price,$image,$category){
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
    }

    function getName(){
        return $this->name;
    }
    function getDescription(){
        return $this->description;
    }
    function getPrice(){
        return $this->price;
    }
    function getImage(){
        // return $this->image;
        if (isset($this->image) && $this->image['error'] === UPLOAD_ERR_OK) {
            $fileContent = file_get_contents($this->image['tmp_name']);
            $image = base64_encode($fileContent);
            return $image;
        } else {
            return "Error uploading file.";
        }
    }

    function getCategory(){
        return $this->category;
    }
}

?>
<?php

class Product{
    private $name;

    function __construct($name){
        $this->name = $name;
    }

    function getName(){
        return $this->name;
    }
}

?>
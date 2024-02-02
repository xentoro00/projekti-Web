<?php

class Contact{
    private $name;
    private $email;
    private $message;



    function __construct($name,$email,$message){
            $this->name = $name;
            $this->message = $message;
            $this->email = $email;
    }


   
    function getName(){
        return $this->name;
    }
    function getMessage(){
        return $this->message;
    }
    function getEmail(){
        return $this->email;
    }
  
}

?>
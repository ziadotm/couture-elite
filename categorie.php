<?php
class Categorie{
public $id;
public $name;

public static $errorMsg = "";

public static $successMsg="";

public function __construct($name){

    //initialize the attributs of the class with the parameters, and hash the password
    $this->name = $name;
   

}
public function insertcategorie($tableName,$conn){

    //insert a client in the database, and give a message to $successMsg and $errorMsg
    $sql = "INSERT INTO $tableName (name)
    VALUES ('$this->name')";
    if (mysqli_query($conn, $sql)) {
    self::$successMsg= "New record created successfully";
    
    } else {
        self::$errorMsg ="Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    }

}


?>
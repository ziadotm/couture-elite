<?php


include('session.php');
class Admin{

public $id;
public $firstname;
public $lastname;
public $email;
public $password;



public static $errorMsg = "";

public static $successMsg="";


public function __construct($firstname2,$lastname,$email,$password){

    //initialize the attributs of the class with the parameters, and hash the password
    $this->firstname = $firstname2;
    $this->lastname = $lastname;
    $this->email = $email;
    $this->password = md5($password);
   

}

public function insertAdmin($tableName,$conn){

//insert a admin in the database, and give a message to $successMsg and $errorMsg
$sql = "INSERT INTO $tableName (firstname, lastname, email,password)
VALUES ('$this->firstname', '$this->lastname', '$this->email','$this->password')";
if (mysqli_query($conn, $sql)) {
self::$successMsg= "New record created successfully";

} else {
    self::$errorMsg ="Error: " . $sql . "<br>" . mysqli_error($conn);
}



}


public static function login($email,$password,$conn){

    $hashed_password = md5($password);
    $sql = "SELECT * FROM admin WHERE email='$email' AND password='$hashed_password' ";
    $res=mysqli_query($conn, $sql);
    if (mysqli_num_rows($res)== 0) {
        echo "incorect credentials";
    }else{
        $row = $res->fetch_assoc();
        Session::init($row);
        header('Location:backoffice.php');
    }
}

public static function  selectAllAdmin($tableName,$conn){

//select all the client from database, and inset the rows results in an array $data[]
$sql = "SELECT id, firstname, lastname,email,idCity FROM $tableName ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $data=[];
        while($row = mysqli_fetch_assoc($result)) {
        
            $data[]=$row;
        }
        return $data;
    }

}

static function selectAdminById($tableName,$conn,$id){
    //select a client by id, and return the row result
    $sql = "SELECT firstname, lastname,email FROM $tableName  WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
    
    }
    return $row;
}

static function updateAdmin($Admin,$tableName,$conn,$id){
    //update a client of $id, with the values of $client in parameter
    //and send the user to read.php
    $sql = "UPDATE $tableName SET lastname='$Admin->lastname',firstname='$Admin->firstname',email='$Admin->email' WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
        self::$successMsg= "New record updated successfully";
header("Location:read.php");
        } else {
            self::$errorMsg= "Error updating record: " . mysqli_error($conn);
        }


}

static function deleteAdmin($tableName,$conn,$id){
    //delet a client by his id, and send the user to read.php
    $sql = "DELETE FROM $tableName WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    self::$successMsg= "Record deleted successfully";
    header("Location:read.php");
} else {
    self::$errorMsg= "Error deleting record: " . mysqli_error($conn);
}

  
    }


  

}

?>

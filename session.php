<?php


class Session {

    public static function init($userInformation){
        if(isset($userInformation)){
            session_start();
            self::fillSession($userInformation);      
        }
      
    
    }


    public static function fillSession($userInformation) {

        $_SESSION ["email"] = $userInformation["email"];
        $_SESSION ["firstname"] = $userInformation["firstname"];
        $_SESSION ["lastname"] = $userInformation["lastname"];

    }


    public static function logout(){

        echo 'destroying session';
        session_destroy();

    }

    public static function isConnected(){
     
        return isset($_SESSION['email']);
    }


    public static function showUserFullname(){
        return $_SESSION["lastname"].' '.$_SESSION['firstname'];
    }
}

?>
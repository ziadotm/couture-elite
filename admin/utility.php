<?php


class Utility {


    public static function endsWithEmsiMailDomain($email) {
        $emsiMaSuffix = "emsi-edu.ma";
        
        // Extract the last portion of the email after the last '@'
        $suffixToCheck = strtolower(substr($email, strrpos($email, '@') + 1));

        
        // Check if the extracted suffix matches the expected suffix
        return $suffixToCheck === strtolower($emsiMaSuffix);
    }

}


?>
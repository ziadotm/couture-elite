<?php
session_start();
include('session.php');


Session::logout();

header('Location:index.php');

?>
<?php
session_start();
include('dbconfig.php');

if(!$_SESSION['username']){

     header('location:login.php');
}


?>
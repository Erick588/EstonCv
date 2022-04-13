<?php
session_start();
include('security.php');

if(isset($_POST['registerbtn']))
{
    $firstname = $_POST['firstname'];
    $others = $_POST['others'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
   

    if($password==$cpassword)
    {
      $password= md5($password);
    $usertype = $_POST['usertype'];
    $query = "INSERT INTO cvs (firstname,others,email,password,user) VALUES ('$firstname','$others','$email','$password','$usertype')";
        $query_run = mysqli_query($connection, $query);
        
        if($query_run)
        {
            $_SESSION['success'] = "Profile Added";
            header('Location: index.php');
           
        }
        else 
        {
            $_SESSION['status'] = "Profile Not Added";
            header('Location: login.php');  
        }

    }
  else{

    $_SESSION['status'] = "Password and Confirm Password does not match";
    header('Location: login.php');  
  }    

}



?>
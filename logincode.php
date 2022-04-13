<?php 

include('security.php');

if(isset($_POST['login_btn'])){
  $email_login = $_POST['email'];
  $password_login=$_POST['password'];
  $password = md5($password_login);  


  $query= "SELECT *FROM cvs WHERE email='$email_login' AND password ='$password' ";
  $query_run = mysqli_query($connection, $query);
  $usertypes = mysqli_fetch_array($query_run);

  if($usertypes['user'] == "admin")
{
  $_SESSION['username']= $email_login;
  header('location:index.php');
  
}

elseif($usertypes['user'] == "user")
{
  $_SESSION['username']= $email_login;
  header('location:./Home/index.php');

}
else{

  $_SESSION['status']= 'Email id / Password is invalid';
   header('location:login.php');
}

}

?>
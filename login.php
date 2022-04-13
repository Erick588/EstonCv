<?php
session_start();
include('includes/header.php'); 
?>




<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

<div class="col-xl-10 col-lg-12 col-md-8">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
        <div class="col-lg-4 d-none d-lg-block"> <img src="./img/aston.png" alt="UF logo" style="height: 400px; width: 350px;"></div>
          <div class="col-lg-8">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Login Here!</h1>
                <?php

                    if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                    {
                        echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
                        unset($_SESSION['status']);
                    }
                ?>
              </div>

                <form class="user" action="logincode.php" method="POST">

                    <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-user" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                    </div>
                    <div class="form-group">
                    <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block"> Login </button>
                  </div>
                   
                </form>
                 <hr/>
                <center><h6>Not a member yet? <a href="./new_user.php">Join now</a></h6></center>

            </div>
          </div>
        </div>
      </div>

  </div>

</div>

</div>


<?php
include('includes/scripts.php'); 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  </head>
  <body>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <div class="col-lg-12">
    <div class="card card-outline card-primary">
      <div class="card-body">
     <form method="POST" action="emp_code.php"> 
         <div class="row">
        <div class="col-md-12 mx-auto">
            <form>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputFirstname">First name*</label>
                        <input type="text" class="form-control" name="firstname" required placeholder="First name">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputLastname">Other Names*</label>
                        <input type="text" class="form-control" name="others" required placeholder="Last name">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="inputAddressLine1">Email Address*</label>
                        <input type="text" class="form-control" name="email" placeholder="Employee Number">
                    </div>
                    <input type="hidden" class="form-control" name="usertype" value="user" placeholder="Employee Number">

                    <div class="col-sm-4">
                    <label>Password*</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">  
                    </div>
                    <div class="col-sm-4">
                    <label>Confirm Password*</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
                    </div>

                </div>
        <center>
            <a href="register.php" class="btn btn-danger">Cancel</a>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </center>
            
      
    </div>
 </form>
      </div>

      
  </div>
</div>
</body>
</center>
    <?php
 include('includes/scripts.php');
 include('includes/footer.php');
 
 ?>
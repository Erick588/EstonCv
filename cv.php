<?php 
      
      include('security.php');
      include('includes/header.php');
      include('includes/navbar.php');

?> 
  <div class="col-lg-12">
    <div class="card card-outline card-primary">
      <div class="card-body">
     <form method="POST" action="emp_code.php"> 
         <div class="row">
        <div class="col-md-12 mx-auto">
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="inputFirstname">Name of the Institution</label>
                        <input type="text" class="form-control" name="institution" required placeholder="University">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputLastname">Course Undertaken</label>
                        <input type="text" class="form-control" name="course" required placeholder="Course">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputLastname">Grade</label>
                        <input type="text" class="form-control" name="grade" placeholder="Grade">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputLastname">Date Finished</label>
                        <input type="date" class="form-control" name="date" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="inputAddressLine1">Certifying Body</label>
                        <input type="text" class="form-control" name="body" placeholder="Certifying Body">
                    </div>
                    <div class="col-sm-4">
                        <label for="inputAddressLine2">Certification </label>
                        <input type="text" class="form-control" name="cert" required placeholder="Certification">
                    </div>
                    <div class="col-sm-4">
                        <label for="inputAddressLine2">Certificate Title</label>
                        <input type="text" class="form-control" name="title" required placeholder="Certificate Title">
                    </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-4">
                <label for="" class="control-label">Programming Language</label>
                <input type="text" class="form-control" name="lang" required placeholder="Programming Language">
                 </div>
                 <div class="col-sm-4">
                <label for="" class="control-label">Programming Language 1</label>
                <input type="text" class="form-control" name="lang1" required placeholder="Programming Language">
                </div>
            <div class="col-sm-4">
                <label for="" class="control-label">Programming Language 2</label>
                <input type="text" class="form-control" name="lang2" required placeholder="Programming Language">
                 </div>
             </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                 <label for="" class="control-label">Company Name</label>
                <input type="text" class="form-control" name="company" required placeholder="Company">
                    </div>
  
                    <div class="col-sm-4">
                        <label for="" class="control-label">Designation</label>
                 <input type="text" class="form-control" name="position" required placeholder="Designation">
                  </div>   

                  <div class="col-sm-4">
                    <label for="" class="control-label">Date Started</label>
                 <input type="text" class="form-control" name="date1" required placeholder="Date Started">
                </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="exampleFormControlTextarea1">Key Responsibilities</label>
                       <textarea class="form-control" name="duties" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Linkedin</label>
                        <input type="url" class="form-control" name="linkedin" required placeholder="Linkedin">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputWebsite">Github</label>
                        <input type="url" name="git" class="form-control" required placeholder="Github">
                    </div>
                    </div>
                
                <div class="modal-footer ">
            <center>
            <a href="register.php" class="btn btn-danger">Cancel</a>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
            </center>
            </form>
        </div>
    </div>
 
      </div>

      
  </div>
</div>

    <?php
 include('includes/scripts.php');
 include('includes/footer.php');
 
 ?>
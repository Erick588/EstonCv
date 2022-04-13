<?php 
      session_start();
      include('security.php');
      include('includes/header.php');
      include('includes/navbar.php');

?> 
<?php
if(isset($_SESSION['success']) && $_SESSION['success']!='')
{
    echo '<h2>'.$_SESSION['success'].'</h2>';
    unset($_SESSION['success']);
}
if(isset($_SESSION['status']) && $_SESSION['status']!='')
{
    echo '<h2 class="bg-info">'.$_SESSION['status'].'</h2>';
    unset($_SESSION['status']);
}
?>

<?php
if(isset($_POST['edit_btn']))
{
$id = $_POST['edit_id'];

 $query="SELECT c.firstname, c.others, c.user, c.email, a.id, a.user_id, a.institution, a.course, a.cert, a.title, a.company, 
 a.date, a.body, a.position, a.lang, a.lang1, a.lang2, a.date1, a.duties, a.linkedin, a.git FROM cvs c 
        RIGHT JOIN profile a ON a.user_id = c.email where a.user_id = '$id'";
$query_run = mysqli_query($connection, $query);

foreach($query_run as $row)
{

    
  ?>
  <div class="col-lg-12">
    <div class="card card-outline card-primary">
      <div class="card-body">
     <form method="POST" action=""> 
         <div class="row">
        <div class="col-md-12 mx-auto">
         <input type="hidden" class="form-control" name="tid" value="<?php echo $row['id'];?>" required placeholder="University">

                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="inputFirstname">Name of the Institution</label>
                        <input type="text" class="form-control" name="institution"value="<?php echo $row['institution'];?>" required placeholder="University">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputLastname">Course Undertaken</label>
                        <input type="text" class="form-control" value="<?php echo $row['course'];?>" name="course" required placeholder="Course">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputLastname">Grade</label>
                        <input type="text" class="form-control" value="<?php echo $row['grade'];?>" name="grade" placeholder="Grade">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputLastname">Date Finished</label>
                        <input type="date" class="form-control" value="<?php echo $row['date'];?>" name="date" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="inputAddressLine1">Certifying Body</label>
                        <input type="text" class="form-control" name="body" value="<?php echo $row['body'];?>" placeholder="Certifying Body">
                    </div>
                    <div class="col-sm-4">
                        <label for="inputAddressLine2">Certification </label>
                        <input type="text" class="form-control" name="cert" value="<?php echo $row['cert'];?>" required placeholder="Certification">
                    </div>
                    <div class="col-sm-4">
                        <label for="inputAddressLine2">Certificate Title</label>
                        <input type="text" class="form-control" name="title"  value="<?php echo $row['title'];?>"required placeholder="Certificate Title">
                    </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-4">
                <label for="" class="control-label">Programming Language</label>
                <input type="text" class="form-control" name="lang" value="<?php echo $row['lang'];?>" required placeholder="Programming Language">
                 </div>
                 <div class="col-sm-4">
                <label for="" class="control-label">Programming Language 1</label>
                <input type="text" class="form-control" name="lang1" value="<?php echo $row['lang1'];?>" required placeholder="Programming Language">
                </div>
            <div class="col-sm-4">
                <label for="" class="control-label">Programming Language 2</label>
                <input type="text" class="form-control" name="lang2" value="<?php echo $row['lang2'];?>" required placeholder="Programming Language">
                 </div>
             </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                 <label for="" class="control-label">Company Name</label>
                <input type="text" class="form-control" name="company" value="<?php echo $row['company'];?>"  required placeholder="Company">
                    </div>
  
                    <div class="col-sm-4">
                        <label for="" class="control-label">Designation</label>
                 <input type="text" class="form-control" name="position" value="<?php echo $row['position'];?>" required placeholder="Designation">
                  </div>   

                  <div class="col-sm-4">
                    <label for="" class="control-label">Date Started</label>
                 <input type="text" class="form-control" name="date1" value="<?php echo $row['date1'];?>" required placeholder="Date Started">
                </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="exampleFormControlTextarea1">Key Responsibilities</label>
                       <textarea class="form-control" name="duties"  id="exampleFormControlTextarea1" rows="3"><?php echo $row['duties'];?></textarea>
                          </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Linkedin</label>
                        <input type="url" class="form-control"  value="<?php echo $row['linkedin'];?>" name="linkedin" required placeholder="Linkedin">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputWebsite">Github</label>
                        <input type="url" name="git" class="form-control" value="<?php echo $row['git'];?>" required placeholder="Github">
                    </div>
                    </div>
                  <input type="hidden" class="form-control" value="<?php echo $_SESSION['username']; ?>" name="user_id" required placeholder="Designation">

                
                <div class="modal-footer ">
            <center>
            <a href="details.php" class="btn btn-danger">Cancel</a>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
            </center>
            </form>
        </div>
    </div>
 
      </div>

  <?php
}}
?>
      
  </div>
</div>


<?php
if(isset($_POST['registerbtn'])){
    
     $institution = $_POST['institution'];
    $course = $_POST['course'];
    $grade = $_POST['grade'];
    $date = $_POST['date'];
    $date1 = $_POST['date1'];
    $body = $_POST['body'];
    $cert = $_POST['cert'];
    $title = $_POST['title']; 
    $lang = $_POST['lang'];
    $lang1 = $_POST['lang1'];
    $lang2 = $_POST['lang2'];
    $company = $_POST['company'];
    $position = $_POST['position'];
    $duties = $_POST['duties'];
    $linkedin = $_POST['linkedin'];
    $git = $_POST['git'];
    $tid = $_POST['tid'];
    
  $query = "UPDATE profile SET institution= '$institution', course= '$course', grade= '$grade', date= '$date', date1= '$date1',
  body= '$body', cert= '$cert', title= '$title', lang= '$lang', lang= '$lang1', lang= '$lang2', company= '$company', position= '$position', 
  duties= '$duties', linkedin= '$linkedin', git='$git' WHERE id = '$tid'";
  
  $query_run = mysqli_query($connection, $query);
  
  if($query_run)
  
  {
  $_SESSION['success']= "Your Data is Updated";
  header('location: details.php');
  }
  else{
    $_SESSION['status']= "Your Data is Not Updated";
    header('location: details.php');
  
  }
  }
?>


    <?php
 include('includes/scripts.php');
 include('includes/footer.php');
 
 ?>
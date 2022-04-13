<?php 
      include('security.php');
      include('includes/header.php');
      include('includes/navbar.php');

?>


<div class="container-fluid">
    <!---Datatable example --->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Candidate Profile
<button type="button" class="btn btn-primary" data-toggle="modal" onclick=" relocate_home()">
       Add CV
</button>

<script>
function relocate_home()
{
     location.href = "cv.php";
} 
</script>
</h5>
</div>
<div class="card-body">

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
        $query="SELECT c.firstname, c.others, c.user, c.email, a.id, a.user_id, a.position, a.grade, a.lang, a.lang1, a.lang2 FROM cvs c 
        RIGHT JOIN profile a ON a.user_id = c.email";
        $query_run=mysqli_query($connection, $query);
        
        
        ?>
         <table  class="table  table-hover" id="table1">
							    
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Contacts</th>
                    <th>User Information</th>
                    <th>Actions</th>
                </tr>
            </thead>
<tbody>
<?php                  $i = 1;
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                                <td><?php  echo $i++ ?></td>
                                <td>
                                <?php  
                                echo  $row['firstname']." ".$row['others'];
                                       ?>
                                       <br>
                                   <small> <i>Role:<?php  echo $row['user']; ?>
                                    </i></small> 
                                </td>
                                <td>
                                <?php
                                echo $row['position']; ?>
                                </td>
                                <td>
                                <i class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Username"></i>
                                <?php  echo $row['email']; ?>
                                      
                                </td>
                                <td>
                                     <small class="text-muted hrsale-text-info-margin">
                                     <i>Languages:<?php  echo $row['lang']." ".$row['lang1']; ?></i></small>
                                    </small>
                                    </td>
                                    <td>
                                     <div class="btn-group" role="group" aria-label="Basic example">
                                    <form action="edit_cv.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['email']; ?>">

                                        <button type="submit" name="edit_btn" class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i></button>

                                    </form><br>
                                     <form action="view_cv.php" method="post">
                                        <input type="hidden" name="vid" value="<?php echo $row['id']; ?>">

                                        <button type="submit" name="view" class="btn btn-light btn-sm"> <i class="fas fa-eye"></i></button>

                                    </form><br>
                                                             <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete"><i class="fas fa-trash-alt danger"></i></i></button>

                                    </div>
                                    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h8 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this record?</h8>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body alert alert-danger">
                            <form action="" method="post">
                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                            <strong>Record deleted can't be restored!!!</strong>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" type= "submit"  name="delete_btn"  class="btn btn-primary">Delete</button>
                            </div>
                            </form>
                                </td>
                               
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>

            
                </table>
               
            </div>
        </div>
        <?php
 if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query_run =  mysqli_query($connection,"DELETE FROM profile WHERE id= '$id' ")or die(mysqli_error($connection));

    if ($query_run) {
        $_SESSION['success'] = "Record Deleted Successfully";
        header('location: details.php');  
      } else {
        $_SESSION['status'] = "Record not Deleted";
        header('location: details.php');  
      }
}
?>
            
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
            $(document).ready(function() {
                $('#table1').DataTable();
            });
        </script>

<?php
 include('includes/scripts.php');
 include('includes/footer.php');
 
 ?>

<?php 
include 'checklogin.php';

include '../db_conn.php';
include 'navbar.php';
?>
<style>
      #updatebutton
  {
    background-color:#4e73df;
    color:white;
    width:%100;
    height:%100;
    font-size:15px;
  }
</style>
 
<!DOCTYPE html>
<html>

<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="Admin.css">
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
 

<head>

 <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">My Profile </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                             <tr >

  <th>User Name</th>

     <th>Name</th>
   <th>E-mail</th>
 
    <th>Phone Number</th>
    <th>Update</th>

  </tr>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                      

                                        </tr>
                                    </tfoot>
                                   <?php 
 $id=$_SESSION['id'];
$query = "SELECT * FROM users where id=$id; ";

$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
   if($total!=0)
   {
while($result = mysqli_fetch_assoc($data)){   //Creates a loop to loop through results

echo "  <tr>
<td>".$result['user_name']."</td>
<td>".$result['name']."</td>
<td>".$result['email']."</td>
<td>".$result['phoneNumber']."</td>

<td><a href='editadmin.php?ai=$result[id] &em=$result[email] &ph=$result[phoneNumber]' ><input type='submit' value='update' id='updatebutton' ></a></td>
</tr>";

}

}
else{
  echo "no records";
}
?>
                                       
                                        
                                     
                                
                                </table>
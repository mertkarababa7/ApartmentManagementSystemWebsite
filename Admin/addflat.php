 <?php 
include 'checklogin.php';
include '../db_conn.php';
include 'navbar.php';
include 'registerdue.php';   
?>


<style>
  .bg-password-image2 {
   background: url("https://images.unsplash.com/photo-1515263487990-61b07816b324?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80");
  background-position: center;  
  background-size: cover;
}
</style>


<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-password-image2">
</div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                              
                                <h1 class="h4 text-gray-900 mb-4">Create New Flat</h1>
                                <br><br><br><br>
                            </div>

                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                      <label>Floor </label>
                                       <input type="text" name="floor"  class="form-control form-control-user" id="exampleFirstName">

                                      <br><br>
 <div class="rlform-group">    
    <label>Block Number</label>
  <?php 
  $result = $conn->query("SELECT Block FROM apartment GROUP BY Block ASC") or die($conn->error);?>
<select name="Block">
    <option value="Block No">Select Block</option>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['Block'] . "'>" . $row['Block'] . "</option>";
    }
    ?>        
</select>
 </div>

                                    </div>
                                    <div class="col-sm-6">
                                      <label>Door Number </label>
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" name="doornumber"  >
 
  
  
        
                                  
 
  
        <br>
                                    </div>
                             <div> <input  type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="Update Your Informations"  />
                               </div>
                                <hr>
                                <br><br><br><br><br><br>
                                
       <?php


if (isset($_GET['submit']))
{

  $floor=$_GET['floor'];
 $Block=$_GET['Block'];
   $doornumber=$_GET['doornumber'];
  
$query1 = "SELECT apartment_id FROM apartment WHERE Block ='$Block'";
                    $result = mysqli_query($conn, $query1);
                    while($row = mysqli_fetch_array($result)){
                        $Apartid = $row['apartment_id'];
                        $customer_id=NULL;

$query="INSERT INTO flats (Ccustomer_id,Apart_id,isfull,Block,door_number,floor) VALUES ('$customer_id',' $Apartid','0','$Block','$doornumber','$floor')";
$data=mysqli_query($conn,$query);
if(isset($data))
{


 $message = 'Updated Successfully!! .';

    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('admin.php');
    </SCRIPT>";
}
else{
 echo "There is an Error ";
}
}
}
?>           
                
                                
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

 
</html>
<?php 
ob_flush(); ?>
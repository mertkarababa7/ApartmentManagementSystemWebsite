<?php
ob_start();
include 'checklogin.php';
include '../db_conn.php';
include 'navbar.php';

$ci=$_GET['ci'];
$na=$_GET['na'];
$su=$_GET['su'];
$dn=$_GET['dn'];
$pn=$_GET['pn'];
$em=$_GET['em'];
?>

<!DOCTYPE html>
<html lang="en">
<head>

 <style>
  .bg-password-image2 {
  background: url("https://cdn.onlinewebfonts.com/svg/img_410571.png");
  background-position: center;  
  background-size: cover;
}
</style>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

<title>Edit Customer </title>
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
                              
                                <h1 class="h4 text-gray-900 mb-4">Change Customer Informations</h1>
                                <br><br><br><br>
                            </div>
<form action="" method="GET" class="user">
   <div class="form-group row">
   <div class="col-sm-6 mb-3 mb-sm-0">
   
  
        <label for="name"> Name</label>
        <input type="text"  class="form-control form-control-user" name="name"  value="<?php echo "$na" ?>" id="lastName">
    </div>
       <div class="col-sm-6">
        <label for="name"> Surname</label>
        <input type="text"  class="form-control form-control-user" name="surname"  value="<?php echo "$su" ?>" id="lastName">
  
  </div>
     <div class="col-sm-6">
        <label for="name"> Door Number</label>
        <input type="text"  class="form-control form-control-user" name="DoorNumber"  value="<?php echo "$dn" ?>" id="lastName">
     </div>
        <div class="col-sm-6">
        <label for="name"> Phone Number</label>
        <input type="text"  class="form-control form-control-user" name="PhoneNumber"  value="<?php echo "$pn" ?>" id="lastName">
    
   </div>
      <div class="col-sm-6">
        <label for="name"> Email</label>
        <input type="text"  class="form-control form-control-user" name="email"  value="<?php echo "$em" ?>" id="lastName">
     </div>

 
        <input type="hidden"  class="form-control form-control-user" name="customerID" value="<?php echo "$ci" ?>" id="firstName">
                                    </div>
                             <div> <input  type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="Update Customer Informations"  />
                               </div>
                                <hr>
                                <br><br>
                                </form>
</div>
  <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>
<?php

if (isset($_GET['submit']))
{

  $customerID=$_GET['customerID'];
   $name=$_GET['name'];
    $surname=$_GET['surname'];
     $DoorNumber=$_GET['DoorNumber'];
      $PhoneNumber=$_GET['PhoneNumber'];
       $email=$_GET['email'];
$query="UPDATE customer SET customer_id='$customerID',name='$name',surname='$surname',door_number='$DoorNumber',email='$email',phone_number='$PhoneNumber' WHERE customer_id='$customerID'";
$data=mysqli_query($conn,$query);
if(isset($data))
{

  echo "<script>alert('record is updated')</script>";
 header("Location: Landlord.php");
}
else{
 echo "There is an Error ";
}
}
ob_flush();
?>
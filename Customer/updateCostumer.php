<?php
include 'CheckCustomerLogin.php';
include '../db_conn.php';
include 'navbar.php';

$em=$_GET['em'];
$ph=$_GET['ph'];
$ci=$_GET['ci'];

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

    <title>Update Customer</title>

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
                              
                                <h1 class="h4 text-gray-900 mb-4">Change Your Informations!</h1>
                                <br><br><br><br>
                            </div>

                      
  


<form action="" method="GET" class="user">

     <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
        <label for="User name">Your Email</label>
        <input type="email" name="email" value="<?php echo "$em" ?>" id="firstName" class="form-control form-control-user">
  
     <input type="hidden" name="CID"  value="<?php echo "$ci" ?>" id="lastName">
     <br><br>
 </div>

                                    <div class="col-sm-6">
        <label for="name"> Your Phone Number</label>
        <input type="number" step="1" pattern="\d+"  name="phone"  value="<?php echo "$ph" ?>" id="lastName" class="form-control form-control-user">
  
      </div>  
 </div>
  

   <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="Update Your Informations" />

    <hr>
    <br><br><br><br><br><br>
</form>

</body>
</html>

<?php

if (isset($_GET['submit']))
{

  $email=$_GET['email'];
   $phone=$_GET['phone'];
    $CID=$_GET['CID'];

$query="UPDATE customer SET email='$email',phone_number='$phone' WHERE customer_id='$CID'";
$data=mysqli_query($conn,$query);
if(isset($data))
{

  $message = 'Updated Successfully!! .';

    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('LoggedCustomer.php');
    </SCRIPT>";
}
else{
 echo "There is an Error ";
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
 <?php 


  include 'checkCustomerLogin.php';
  include '../db_conn.php';
  include 'navbar.php';

 ?>


 <style>
  .bg-password-image2 {
     background: url("https://www.shareicon.net/data/2017/06/22/887564_message_512x512.png");

     background-position: center;  
     background-size: cover;
 }
</style>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Messages</title>

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
                              
                                <h1 class="h4 text-gray-900 mb-4">Send Message</h1>
                                <br><br>
                            </div>

                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                      <label>Message Title </label>
<select name="head" class = "form-control">
    <option value="Complaint">Complaint</option>
     <option value="Request">Request</option>
      <option value="Other">Other</option>
   
         
</select>
</div>
                                    <div class="col-sm-6">
                                      <label>Reciever </label>
                                      <select name="head" class = "form-control" disabled="disabled">
                                         <option value="Complaint"><?php 
           $id=$_SESSION['customer_id'];
         $query = "SELECT * FROM users,customer where users.id=customer.admin_id and customer.customer_id='$id'";

$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
   if($total!=0)
   {
while($result = mysqli_fetch_assoc($data)){   

       
echo "".$result['user_name']; }}
                                          ?>
                                         
                                          </option>
                                       </select>
                                        <br>
                                      </div>
                                     <br><br>
                                    <div class="col-sm-12">
                                      <label>Message Details </label>
                                        <input  type="text" class="form-control form-control-user" id="exampleLastName" name="message">
                                        <br>
                                      </div>
        
        
                                    </div>
                             <div> <input  type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="Send Message"  />
                               </div>

                                <hr>
                                <br><br><br><br>
                                
       <?php
  $admin_id=$_SESSION['admin_id'];
   $customer_id=$_SESSION['customer_id'];

if (isset($_GET['submit']))
{

  $head=$_GET['head'];
   $message=$_GET['message'];
  

$query="INSERT INTO messages (head,message,messagedate,admin_id,customer_id,sender,reciever) VALUES('$head', '$message',CURDATE(),'$admin_id','$customer_id' ,'customer' ,'admin')"; 
$data=mysqli_query($conn,$query);
if(isset($data))
{

 $message = 'Updated Successfully!! .';

    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('customermessage.php');
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

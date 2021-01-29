<?php
include 'checkLogin.php';
include '../db_conn.php';
include 'navbar.php';
ob_start();


?>

<style>
  .bg-password-image2 {
  background: url("https://s3-us-west-1.amazonaws.com/assets.ruleoneinvesting.com/blog/wp-content/uploads/2018/04/04133136/spending-money-wisely1.jpeg");
  background-position: center;  
  background-size: cover;
}
</style>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Spend Dues</title>

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
                              
                                <h1 class="h4 text-gray-900 mb-4">Due Spend Details</h1>
                                <br><br><br><br>
                            </div>

                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                      <label>Details </label>
                                       <input type="text" name="details" class="form-control form-control-user" id="exampleFirstName">
                                      <br><br>
                                    </div>
                                    <div class="col-sm-6">
                                      <label>Amount </label>
                                        <input  type="number" step="1" pattern="\d+" class="form-control form-control-user" id="exampleLastName" name="amount">
                                        <br>
                                      </div>
        <div class="col-md-12">  
        <label>Dues </label>                                 
 <select name="Did" class="form-control">
 
    <option value="Did" >Select Due</option>
    <?php 
  $result = $conn->query("SELECT SpentMoney,CollectedMoney,details,id,Block FROM dues where isactive=1 ORDER BY date DESC ") or die($conn->error);?>
   <?php
    while ($row = mysqli_fetch_array($result)) {
      $kalan=$row['CollectedMoney']-$row['SpentMoney'];

        echo "<option value='" . $row['id'] . "'>" . $row['details'] . " >" . $row['Block'] . "Block>" . $kalan . " TL Left</option>";
    }
    ?>         
</select>
</div>
  
        
                                    </div>
                             <div> <input  type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="Spend Money On Selected Due"  />
                               </div>
                                <hr>
                               
                                
       <?php


function validate($data){
       $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
  }
  // datayı validate ile kontrol ettikten sonra html sayfasında ki text valuesinden postladı
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if (isset($_GET['submit'])) {
if (empty($_GET['details']) || empty($_GET['amount'])   ) {
  echo "ERROR: Please Fill in the blanks";
 
}
else{


  $details=$_GET['details'];
   $amount=$_GET['amount'];
    $did=$_GET['Did'];

$sql="INSERT INTO duespent (amount,details,due_id,SpentDate) VALUES('$amount', '$details','$did',CURDATE())"; 
if(mysqli_query($conn, $sql)){
   
     $message = 'UPDATED!! Spend Wisely My Friend!';

    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('admin.php');
    </SCRIPT>";
        

} else{ 
    echo "ERROR: Please Fill in the blanks";
}


mysqli_close($conn);
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
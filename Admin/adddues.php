 <?php 
 include 'checklogin.php';
 include '../db_conn.php';
 include 'navbar.php';
 include 'registerdue.php';   
 ?>


 <style>
  .bg-password-image2 {
      background: url("https://www.flaticon.com/premium-icon/icons/svg/2403/2403797.svg");
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

                                <h1 class="h4 text-gray-900 mb-4">Create New Due</h1>
                                <br><br><br><br>
                            </div>

                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                      <label>Due Details </label>
                                      <input type="text" name="details"  class="form-control form-control-user" id="exampleFirstName">

                                      <input type="hidden" name="ai" >
                                      <br><br>
                                  </div>
                                  <div class="col-sm-6">
                                      <label>Due Amount </label>
                                      <input type="text" class="form-control form-control-user" id="exampleLastName" name="amount"  >



                                  </div>
                                  <div class="col-sm-6">
                                      <label>Due Date </label>
                                      <input type="date" class="form-control form-control-user" id="exampleLastName" name="date"  >



                                  </div>
                                  <div class="col-sm-6">
                                      <label>Block </label>
                                      <input type="text" class="form-control form-control-user" id="exampleLastName" name="Block">


                                      <br>
                                  </div>
                                  <div> <input  type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="Update Your Informations"  />
                                  </div>
                                  <hr>
                                  <br><br><br><br><br><br>

                                  <?php

                                  if (isset($_GET['submit']))
                                  {

                                      $amount=$_GET['amount'];
                                      $details=$_GET['details'];
                                      $Block=$_GET['Block'];
                                      $date=$_GET['date'];
                                      $query1 = "SELECT apartment_id FROM apartment WHERE Block = '$Block'";
                                      $result = mysqli_query($conn, $query1);
                                      while($row = mysqli_fetch_array($result)){
                                        $Apartid = $row['apartment_id'];
                                        $zero='0';

                                        $query="INSERT INTO dues (amount,details,Block,date,Apart_id) VALUES ('$amount','$details','$Block','$date','$Apartid')";
                                        $data=mysqli_query($conn,$query);
                                        if(isset($data))
                                        {
                                         $last_id = $conn->insert_id;
                                       $sqlForAllUsers = "SELECT * FROM customer, flats 
                                      WHERE customer.customer_id = flats.Ccustomer_id AND flats.Block ='$Block'  ";
                                    $result2 = $conn->query($sqlForAllUsers);
                                     if($result2->num_rows > 0){ 
                                         while ($row2 = $result2->fetch_assoc()){
                                              $customer_id = $row2["customer_id"];
                                           $query1="INSERT INTO Depts (amount,ispaid,Block,apartment_id,due_id,customer_id,details,OpenedDate) VALUES ('$amount','$zero','$Block','$Apartid','$last_id','$customer_id','$details','$date')";

                                           mysqli_query($conn,$query1);


                                           $message = 'Updated Successfully!! .';

                                           echo "<SCRIPT> //not showing me this
                                           alert('$message')
                                           window.location.replace('admin.php');
                                           </SCRIPT>";
                                       }
}
                                       else{
                                           echo "There is an Error ";
                                    
                                    }   }
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
<?php 
include 'checkCustomerLogin.php';
 include '../db_conn.php';
 include 'navbar.php';
   ?>


<!DOCTYPE html>
<html>
<head>
	<title> My Profile </title>
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

<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="customer.css">



</head>
<body>


  <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">My Total Payments</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

               

   
  <tr class="active-row">
    <th>Dues</th>
        <th>Total Due Money</th>
    <th>Number Of Dues</th>
 
  
     
  </tr>



<?php   
      
    $tid=$_SESSION['customer_id'];
 
    $sql = "SELECT customer_id,ispaid,sum(amount),count(ispaid) from depts  where customer_id='$tid' GROUP BY ispaid";
       $ödenen='Paid ';
       $ödenmeyen='Not Paid';
                $run= mysqli_query($conn, $sql);{
                    
                while ($row = $run->fetch_assoc()) {
       if($row["ispaid"] == 1)
       {
echo "  <tbody id=Table><tr class='active-row'>

<td>".$ödenen."</td> 
      <td>".$row['sum(amount)']."</td> 
<td>".$row['count(ispaid)']."</td>
</tr></tbody>";

}
else {
  echo "  <tbody id=Table><tr class='table-danger'>

<td>".$ödenmeyen."</td> 
      <td>".$row['sum(amount)']."</td> 
<td>".$row['count(ispaid)']."</td>
</tr></tbody>";

}

}
}
?>
  
       
</table>
                
                    
               </div>


             </div>
           </div>
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">My Profile</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

               

   
  <tr class="active-row">
    <th>My Name</th>
    <th>My Door Number</th>
     <th>My Block</th>
     <th>My Email</th>
      <th>My Phone Number</th>
       <th>Change My Informations</th>
  </tr>



<?php 	
      
    $tid=$_SESSION['customer_id'];

    $sql = "SELECT * from customer where  customer_id=$tid";
           
                $run= mysqli_query($conn, $sql);{
                    
                while ($row = $run->fetch_assoc()) {
    
                   
      
          echo "  <tbody><tr class='active-row'>
<td>".$row['name']." ".$row['surname']."</td>
<td>".$row['door_number']."</td>

<td>".$row['Block']."</td>
<td>".$row['email']."</td>
<td>".$row['phone_number']."</td>

<td><a href='updateCostumer.php?ci=$row[customer_id]&em=$row[email]&ph=$row[phone_number]' ><input type='submit' value='Update' id='updatebutton' ></a> </td>
 </tr>"

;
?>
  
        <?php
                }}
        ?>
</table>
                
                    
               </div></div>

               </div>
                  
               <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">My Apartment</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

               

   
  <tr class="active-row">
    <th>My Apartment Address</th>
        <th>My Block</th>
    <th>My Door Number</th>
 
  
     
  </tr>



<?php   
      
    $tid=$_SESSION['customer_id'];

    $sql = "SELECT * from apartment,customer where  customer.Block=apartment.Block and customer.customer_id='$tid'";
           
                $run= mysqli_query($conn, $sql);{
                    
                while ($row = $run->fetch_assoc()) {
    
                   
      
          echo "  <tbody><tr class='active-row'>

<td>".$row['Adress']."</td>
<td>".$row['Block']."</td>
<td>".$row['door_number']."</td>

 </tr>"

;
?>
  
        <?php
                }}
        ?>
</table>
                
                    
               </div>


             </div>
           </div>

                 
    
                 

</body>
   <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</html>
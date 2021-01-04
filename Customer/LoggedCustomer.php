<?php 
include 'checkCustomerLogin.php';
 include '../db_conn.php';

   ?>


<!DOCTYPE html>
<html>
<head>
	<title> Costumer Home Page </title>
<style>
body {


 background-color: #cccccc;
   background-repeat: no-repeat;
   background-size: cover;
 
}
#updatebutton
  {
    background-color:green;
    color:white;
    width:%100;
    height:%100;
    font-size:15px;
  }
  .features {
  border-collapse: collapse;
  font-family: sans-serif;
}

.features__cell2 {
  max-width: 250px;
  font-size: 0.9em;
  font-weight: normal;
  padding: 0.5em 1em;
  color: #333333;
  border: 1px solid #dddddd;
  line-height: 1.4;
}

.features__cell--bold {
  font-weight: bold;
}

.features__cell--shaded {
  background: #eeeeee;
}

.features__cell--large {
  font-size: 1.25em;
}

.features__cell--center {
  text-align: center;
}

.features__tick2::after {
  content: "\2716";
  font-size: 2.0em;
  color: red;
}

.features__cell {
  max-width: 250px;
  font-size: 0.9em;
  font-weight: normal;
  padding: 0.5em 1em;
  color: #333333;
  border: 1px solid #dddddd;
  line-height: 1.4;
}

.features__cell--bold {
  font-weight: bold;
}

.features__cell--shaded {
  background: #eeeeee;
}

.features__cell--large {
  font-size: 1.25em;
}

.features__cell--center {
  text-align: center;
}

.features__tick::after {
  content: "\2714";
  font-size: 2.0em;
  color: green;
}

  

</style>


  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="custom.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,500,600" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="customer.css">

<div class="topnav">
<a href="LoggedCustomer.php" class="active">Home Page</a>
<a href="borc.php">Pay Rent</a>
<a href="fee.php" >Pay Fee</a>
<a href="expenses.php" >Expenses</a>
<a href="logoutCustomer.php">Costumer Log Out </a>
<a href="Announcement.php" >Announcements </a>
  <a href="staff.php" >Staff </a>
 
</div>
</head>
<body>
<div  class="menu" style="background-color:#4CAF50; margin:100px,100px,10px,10px;"><h1>My Details </h1>
               
<table class="styled-table" border="1" cellspacing="7">
   
  <tr class="active-row">
    <th>Full Name</th>
    <th>Rent</th>
    <th>Door Number</th>
     <th>Deposit</th>
     <th>Your Landlord</th>
        <th>Your Apartment</th>
     <th colspan="3" align="center">Email / Phone <br> Change</th>
     
  </tr>



<?php 	
      
    $tid=$_SESSION['customer_id'];
    $sql = "select *,(select price from flats where door_number=t.door_number)as price,(select Block from flats where door_number=t.door_number)as Block from customer t where customer_id=$tid";
           
                $run= mysqli_query($conn, $sql);{
                    
                while ($row = $run->fetch_assoc()) {
    
                   
      
          echo "  <tbody><tr class='active-row'>
<td>".$row['name']." ".$row['surname']."</td>
<td>".$row['price']."</td>
<td>".$row['door_number']."</td>
<td>".$row['deposit']."</td>
<td>".$row['user_name']."</td>
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
                
                    
               </div>

               
<h2>
<div class="main-section">
    <div class="dashbord dashbord-skyblue">
      <div class="icon-section">
        <i class="fa fa-users" aria-hidden="true"></i><br>
        <large>Payments</large>
        
      </div>
      <div class="detail-section">
        <a href="borc.php">Pay Rent </a>
      </div>
       <div class="detail-section">
        <a href="expenses.php">Pay Expense </a>
      </div>
       <div class="detail-section">
        <a href="fee.php">Pay Fee </a>
      </div>
    </div>
    <div class="dashbord dashbord-green"> 
        <div class="icon-section">
        <i class="fa fa-building-o" aria-hidden="true"></i><br>
        <large>View</large>
        
      </div>
      <div class="detail-section">
        <a href="LoggedCustomer.php">View Details</a>
      </div>
      <div class="detail-section">
        <a href="Announcement.php">View Announcements</a>
      </div>
        <div class="detail-section">
        <a href="staff.php">View Staff</a>
      </div>
    </div></h2>
    
  <div class="balance-wrapper">
    <div>
      <h1>
   <table class="features" border="2" cellspacing="7">

    <tr class="active-row">
      <th>Rent Paid</th>
   
    </tr>
  </thead>
  <tbody>
   <?php 
   include '../db_conn.php';
    $sql = "SELECT *FROM transaction  WHERE MONTH(date) = MONTH(CURRENT_DATE()) AND YEAR(date) = YEAR(CURRENT_DATE()) AND  customer_id='$tid'"; 
  
   if ($result = $conn->query($sql)) {


    if ($row = $result->fetch_assoc()) {

      ?>
      <tr>

 
      </td>
        <td class="features__cell features__cell--center"><span class="features__tick"></span></td>
       
      </tr> 
      <?php  


    }else{

         ?>
      <tr>

      <td class="features__cell2 features__cell--center"><span class="features__tick2"></span></td>
       
      </tr> 
      <?php  
    }

    /* free result set */
    $result->close();
  }



  ?>   



</table>
    </div>
    <div>
      <h1>
   <table class="features" border="2" cellspacing="7">

    <tr class="active-row">
      <th>Fee Paid</th>
   
    </tr>
  </thead>
  <tbody>
   <?php 
   include '../db_conn.php';
    $sql = "SELECT *FROM transactionfee  WHERE MONTH(date) = MONTH(CURRENT_DATE()) AND YEAR(date) = YEAR(CURRENT_DATE()) AND  customer_id='$tid'"; 
  
   if ($result = $conn->query($sql)) {


    if ($row = $result->fetch_assoc()) {

      ?>
      <tr>

 
      </td>
        <td class="features__cell features__cell--center"><span class="features__tick"></span></td>
       
      </tr> 
      <?php  


    }else{

         ?>
       <tr>

      <td class="features__cell2 features__cell--center"><span class="features__tick2"></span></td>
       
      </tr> 
      <?php  
    }

    /* free result set */
    $result->close();
  }



  ?>   



</table>

    </div>
  </div> 
    
             
                 
    
                 

</body>
</html>
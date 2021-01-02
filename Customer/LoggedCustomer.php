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
  
  

</style>



<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="customer.css">

<div class="topnav">
<a href="LoggedCustomer.php" class="active">Home Page</a>
<a href="borc.php">Pay Rent</a>
<a href="fee.php" >Pay Fee</a>
<a href="expenses.php" >Expenses</a>
<a href="logoutCustomer.php">Costumer LogOut </a>
  
 
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
</table>
                
                    
               </div>

                    </form>

           </div>
         </div>
       
        <?php
                }}
        ?>
                 

</body>
</html>
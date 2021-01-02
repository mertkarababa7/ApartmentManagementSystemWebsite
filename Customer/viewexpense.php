<?php 

include '../db_conn.php';
include 'checkCustomerLogin.php';
 ?>

 <style>
  #updatebutton
  {
    background-color:green;
    color:white;
    width:%100;
    height:%100;
    font-size:15px;
  }
  #dltbutton
  {
    background-color:red;
    color:white;
    width:%100;
    height:%100;
    font-size:15px;
  }
 </style>

<!DOCTYPE html>
<html>
<head>
	<title> Table for flats </title>
<style>
body {
 background-image: url("homepage.jpg");
 background-color: #cccccc;
   background-repeat: no-repeat;
   background-size: cover;
 
}  

</style>



<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="Admin2.css">
<div class="topnav">
 <a href="registerCustomer.php"  >Register Costumer</a>
 <a href="registerAdmin.php" >Register Admin</a>
  <a href="logout.php">Admin LogOut </a>
  <a href="Apartments.php">Apartments</a>
  <a href="tenants.php">Payments</a>
  <a href="Landlord.php">Costumers</a>
  <a href="admin.php"class="active">Return Home</a>
  <a href="registerAnnouncement.php">Create Announcements </a>
  <a href="registerStaff.php">Register Staff</a>
   <a href="search.php">Search</a>
</div>
</head>
<body>


<h2>Expense Detail is >><?php 
$query = "SELECT * FROM expenses ORDER BY date DESC; ";

$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
   if($total!=0)
   {
while($result = mysqli_fetch_assoc($data)){   //Creates a loop to loop through results

echo "  <tbody><tr class='active-row'>
<td>".$result['Details']."</td></tr>";

}

}
else{
  echo "no records";
}
?> </h2>





<table class="styled-table" border="2" cellspacing="7">
   
  <tr "active-row">
    <th>Expense Price</th>
    <th>Spent</th>
    <th>Details</th>
    <th>Block</th>
    <th>Date</th>
  </tr>

    <?php 

$query = "SELECT * FROM expenses ORDER BY date DESC; ";

$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
   if($total!=0)
   {
while($result = mysqli_fetch_assoc($data)){ 
echo "  <tbody><tr class='active-row'>
<td>".$result['expense']."</td>
<td>".$result['spent']."</td>
<td>".$result['Details']."</td>
<td>".$result['Block']."</td>
<td>".$result['date']."</td>

</tr>";

}

}
else{
  echo "no records";
}
?>
  
</table>

<table class="styled-table" border="2" cellspacing="7">
   
  <tr "active-row">
    <th>Total Gathered Money From Customers</th>
 <div><?php
      $tid = $_SESSION['customer_id'];

    $sql = "select *,(select id from expenses where Block=t.Block)as expenseid from customer t where customer_id=$tid";
    if($result= mysqli_query($conn, $sql)){
        $row =$result->fetch_assoc();
        $expenseid=$row['expenseid'];
    }
   

$query = "SELECT  SUM(amount)  FROM transactionexpenses Where expid=$expenseid; ";

$run = mysqli_query($conn,$query);
$total=mysqli_num_rows($run);
   if($total!=0)
   {
while($result = mysqli_fetch_assoc($run)){ 

echo "  <tbody><tr class='active-row'>
 <td>".$result['SUM(amount)']."</td>

<tr>";
}
}
?>

    </div>
</table>
</body>
</html>
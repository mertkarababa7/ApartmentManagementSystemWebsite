<?php 

include '../db_conn.php';
include 'checkCustomerLogin.php';
$id=$_GET['id'];
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
<link rel="stylesheet" href="customer.css">
<div class="topnav">
  <a href="LoggedCustomer.php" >Home Page</a>
<a href="borc.php">Pay Rent</a>
<a href="fee.php" >Pay Fee</a>
<a href="expenses.php"class="active" >Expenses</a>
<a href="logoutCustomer.php">Costumer Log Out </a>
  <a href="Announcement.php" >Announcements </a>
   <a href="staff.php" class="active">Staff </a>
</div>
</head>
<body>


<h2>Expense Header <br><?php 
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
?> 





<table class="styled-table" border="2" cellspacing="7">
   
  <tr "active-row">
    <th>Expense Price</th>
    <th>Spent</th>
    <th>Details</th>
    <th>Block</th>
    <th>Opened Date</th>
  </tr>

    <?php 

$query = "SELECT * FROM expenses where id=$id; ";

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
  
</table></h1>
<div class="balance-wrapper">
    <div>
<br>
<h2 >Customers Who Paid That Expense Price
<table class="styled-table" border="2" cellspacing="7">
   
  <tr "active-row">
    <th>Customer Name</th>
    <th>Customer Surname</th>
    <th>Amount Taken</th> 
    <th>Paid Date</th> </tr>
 <?php
     
$query = "SELECT  *  FROM transactionexpenses Where expid=$id; ";

$run = mysqli_query($conn,$query);
$total=mysqli_num_rows($run);
   if($total!=0)
   {
while($result = mysqli_fetch_assoc($run)){ 

echo "  <tbody><tr class='active-row'>
<td>".$result['name']."</td>
<td>".$result['surname']."</td>
<td>".$result['amount']."</td>
<td>".$result['date']."</td>

</tr>";
}
}
?>

    
</table>
</div>
  <div>
<br>
<h2>Total Gathered Money
<table class="styled-table" border="2" cellspacing="7">
   
  <tr "active-row">
    <th>Total Gathered Money</th>
    
 <?php
     
$query = "SELECT SUM(amount) FROM transactionexpenses Where expid=$id; ";

$run = mysqli_query($conn,$query);
$total=mysqli_num_rows($run);
   if($total!=0)
   {
while($result = mysqli_fetch_assoc($run)){ 

echo "  <tbody><tr class='active-row'>
<td>".$result['SUM(amount)']."</td>


</tr>";
}
}
?>

  
</table>
</div>
</div>
</body>
</html>
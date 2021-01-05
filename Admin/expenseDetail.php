<?php 

include '../db_conn.php';
$id=$_GET['ei'];
$detail=$_GET['dt'];
$bl=$_GET['block'];
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
  <title> Who paid </title>
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


<h2>PAID CUSTOMER LIST
<table class="styled-table" border="2" cellspacing="7">
   
  <tr "active-row">
     <th>Name</th>
    <th>Surname</th>

    <th>Customer ID</th>
   
    <th>Block</th>
    <th>Amount</th>
      <th>Paid Date</th>
  </tr>

    <?php 

$query = "SELECT * FROM transactionexpenses where expid=$id; ";

$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
   if($total!=0)
   {
while($result = mysqli_fetch_assoc($data)){ 
echo "  <tbody><tr class='active-row'>
<td>".$result['name']."</td>
<td>".$result['surname']."</td>
<td>".$result['customer_id']."</td>
<td>".$result['Block']."</td>
<td>".$result['amount']."</td>
<td>".$result['date']."</td>
</tr>";

}

}
else{
  echo "no records";
}
?>
  
</table>




NOT PAID LIST
<table class="styled-table" border="2" cellspacing="7">
   
  <tr "active-row">
      <th>Name</th>
    <th>Surname</th>
    <th>Customer ID</th>
    <th>Block</th>
     <th>Door Number</th>
  </tr>

    <?php 


$query = "SELECT * FROM customer where  customer_id NOT IN (select customer_id from transactionexpenses where expid='$id'  )and  Block='$bl' ";

$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
   if($total!=0)
   {
while($result = mysqli_fetch_assoc($data)){ 
echo "  <tbody><tr class='active-row'>
<td>".$result['name']."</td>
<td>".$result['surname']."</td>
<td>".$result['customer_id']."</td>

<td>".$result['Block']."</td>
<td>".$result['door_number']."</td>
</tr>";

}

}
else{
  echo "no records";
}
?>
  
</table>


</body>
</html>













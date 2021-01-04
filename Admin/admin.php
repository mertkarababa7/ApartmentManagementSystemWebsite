<?php 
include 'checklogin.php';
include '../db_conn.php'

 ?>

<!DOCTYPE html>
<html>
<head>
	<title> Apartment Management System </title>
  
   <style>
body {
 background-image: url("homepage.jpg");
 background-color: #cccccc;
   background-repeat: no-repeat;
   background-size: cover;
 
}   
.a{
  text-align: center;
}
table, th, td 
{
  margin-left: auto;
  margin-right: auto;
   border: 1px solid black;
}
</style>
<link rel="stylesheet" href="Main.css">
<link rel="stylesheet" href="admin.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="custom.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,500,600" rel="stylesheet" type="text/css">


<div class="topnav">
 <a href="registerCustomer.php" >Register Customer</a>
 <a href="registerAdmin.php" >Register Admin</a>
  <a href="logout.php">Admin LogOut </a>
  <a href="Apartments.php">Apartments</a>
  <a href="Tenants.php">Payments</a>
  <a href="Landlord.php">Costumers</a>
  <a href="expenses.php">Expenses</a>
  <a href="registerAnnouncement.php">Create Announcements </a>
  <a href="registerStaff.php">Register Staff</a>
    <a href="search.php" >Search</a>
</div>
</head>
<body>
<h1 class="a";> Welcome to Apartment Management System </h1>  

<h2><table class="center" >
   
  <tr >
    
    <th>user name</th>
    <th>email</th>
    <th>phone number</th>
    <th>name</th>
     <th>Update</th>
 
  </tr>

    <?php 
 $id=$_SESSION['id'];
$query = "SELECT * FROM users where id=$id; ";

$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
   if($total!=0)
   {
while($result = mysqli_fetch_assoc($data)){   //Creates a loop to loop through results

echo "  <tr>

<td>".$result['user_name']."</td>
<td>".$result['email']."</td>
<td>".$result['phoneNumber']."</td>
<td>".$result['name']."</td>
<td><a href='editadmin.php?ai=$result[id] &em=$result[email] &ph=$result[phoneNumber]' ><input type='submit' value='update' id='updatebutton' ></a></td>
</tr>";

}

}
else{
  echo "no records";
}
?>
  
</table></h2>
 


<div class="main-section">
    <div class="dashbord dashbord-skyblue">
      <div class="icon-section">
        <i class="fa fa-users" aria-hidden="true"></i><br>
        <large>Total Customers</large>
        <p><?php
 $query = "SELECT COUNT(*) FROM customer ";   
$result = mysqli_query($conn,$query) or die(mysql_error());
while($row = mysqli_fetch_array($result)){
  echo "  <tbody><tr class='active-row'>
<td>".$row[0]."</td></tr>";}
 ?> </p>
      </div>
      <div class="detail-section">
        <a href="registerCustomer.php">Register Customer </a>
      </div>
       <div class="detail-section">
        <a href="Landlord.php">View Customers </a>
      </div>
    </div>
    <div class="dashbord dashbord-green">
      <div class="icon-section">
        <i class="fa fa-building-o" aria-hidden="true"></i><br>
        <large>Flats</large>
        <p><?php
 $query = "SELECT COUNT(*) FROM flats ";   
$result = mysqli_query($conn,$query) or die(mysql_error());
while($row = mysqli_fetch_array($result)){
  echo "  <tbody><tr class='active-row'>
<td>".$row[0]."</td></tr>";}
 ?> </p>
      </div>
      <div class="detail-section">
        <a href="apartments.php">Register Apartment</a>
      </div>
      <div class="detail-section">
        <a href="viewflats.php">View Apartments</a>
      </div>
    </div>
    <div class="dashbord dashbord-orange">
      <div class="icon-section">
        <i class="fa fa-try" aria-hidden="true"></i><br>
        <large>Expenses</large>
        <p><?php
 $query = "SELECT COUNT(*) FROM expenses ";   
$result = mysqli_query($conn,$query) or die(mysql_error());
while($row = mysqli_fetch_array($result)){
  echo "  <tbody><tr class='active-row'>
<td>".$row[0]."</td></tr>";}
 ?> </p>
      </div>
      <div class="detail-section">
        <a href="expenses.php">Create Expense </a>
      </div>
      <div class="detail-section">
        <a href="Viewexpenses.php">View Expenses</a>
      </div>
    </div>
    <div class="dashbord dashbord-blue">
      <div class="icon-section">
        <i class="fa fa-try" aria-hidden="true"></i><br>
        <large>Rents</large>
          <p><?php
   $query = "SELECT COUNT(*) FROM transaction ";   
  $result = mysqli_query($conn,$query) or die(mysql_error());
  while($row = mysqli_fetch_array($result)){
    echo "  <tbody><tr class='active-row'>
  <td>".$row[0]."</td></tr>";}
   ?></p>
      </div>
      <div class="detail-section">
        <a href="tenants.php">View Transactions </a>
      </div>
      <div class="detail-section">
        <a href="balance.php">View Balance </a>
      </div>
    </div>
    <div class="dashbord dashbord-red">
      <div class="icon-section">
        <i class="fa fa-user" aria-hidden="true"></i><br>
        <small>Staff</small>
        <p><?php
 $query = "SELECT COUNT(*) FROM staff ";   
$result = mysqli_query($conn,$query) or die(mysql_error());
while($row = mysqli_fetch_array($result)){
  echo "  <tbody><tr class='active-row'>
<td>".$row[0]."</td></tr>";}
 ?></p>
      </div>
      <div class="detail-section">
        <a href="registerStaff.php">Register Staff</a>
      </div>
       <div class="detail-section">
        <a href="viewStaff.php">View Staff </a>
      </div>
    </div>
    <div class="dashbord dashbord-skyblue">
      <div class="icon-section">
        <i class="fa fa-comments" aria-hidden="true"></i><br>
        <small>Announcement/Event</small>
        <p><?php
 $query = "SELECT COUNT(*) FROM announcement ";   
$result = mysqli_query($conn,$query) or die(mysql_error());
while($row = mysqli_fetch_array($result)){
  echo "  <tbody><tr class='active-row'>
<td>".$row[0]."</td></tr>";}
 ?></p>
      </div>
      <div class="detail-section">
        <a href="registerAnnouncement.php">Create Announcement </a>
      </div>
       <div class="detail-section">
        <a href="viewAnnouncement.php">View Announcement </a>
      </div>
    </div>
  </div>

</body>
</html>


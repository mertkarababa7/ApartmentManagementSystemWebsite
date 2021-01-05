<?php 

include '../db_conn.php';
include 'checkLogin.php';
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
	<title> Customers</title>
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
  <a href="Tenants.php">Payments</a>
  <a href="admin.php"class="active">Return Home</a>
  <a href="expenses.php">Expenses</a>
  <a href="registerAnnouncement.php">Create Announcements </a>
  <a href="registerStaff.php">Register Staff</a>
  <a href="search.php">Search</a>
</div>
</head>
<body>


<h2>Table For Customers </h2>




<table class="styled-table" border="2" cellspacing="7">
   
  <tr "active-row">
    <th>Name</th>
    <th>Move_in_Date</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Door Number</th>
     
      <th colspan="2" align="center">Database Operations</th>
       <th>Move Out</th>
  </tr>


    <?php 

$query = "SELECT * FROM customer ORDER BY date DESC; ";
//TO see better with ascending door numbers
$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
   if($total!=0)
   {
while($result = mysqli_fetch_assoc($data)){   //Creates a loop to loop through results

echo "  <tbody><tr class='active-row'>
<td>".$result['name']."</td>
<td>".$result['date']."</td>
<td>".$result['email']."</td>
<td>".$result['phone_number']."</td>
<td>".$result['door_number']."</td>

<td><a href='edit.php?ci=$result[customer_id] & na=$result[name] &su=$result[surname] & em=$result[email] &dn=$result[door_number]& pn=$result[phone_number]' ><input type='submit' value='update' id='updatebutton' ></a></td>
<td><a href='delete.php?ci=$result[customer_id]'onclick='return checkdelete()' ><input type='submit' value='Delete' id='dltbutton' ></a> </td>
<td><a href='moveout.php?ci=$result[customer_id]'onclick='return checkdelete()' ><input type='submit' value='Move Out' id='dltbutton' ></a> </td>
</tr>";

}
}
else{
  echo "no records";
}
?>
  
</table>

<script>
  function checkdelete()
  {
    return confirm('Are you sure you want to delete this Customer')
  }
</script>

</body>
</html>
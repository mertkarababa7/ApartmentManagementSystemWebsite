
<?php 
include 'checklogin.php';


 ?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
 background-image: url("homepage.jpg");
 background-color: #cccccc;
   background-repeat: no-repeat;
   background-size: cover;
 
}   
</style>
	<title> Table for Tenants </title>

<link rel="stylesheet" href="Main.css">
<link rel="stylesheet" href="admin.css">
<div class="topnav">
 <a href="registerCustomer.php" class="active">Register Customer</a>
 <a href="registerAdmin.php" class="active">Register Admin</a>
  <a href="logout.php">Admin LogOut </a>
  <a href="Apartments.php">Apartments</a>
  <a href="admin.php" class="active">Return Home</a>
  <a href="Landlord.php">Costumers</a>
  
</div>
</head>
<body>


<h2> Tenants </h2>

<table style="width:75%">

  <tr>
    <th>Name</th>
    <th>Surname</th>
    <th>Contact No</th>
	<th>Room No</th>
	 <th>Contract Term</th>
	 <th>Payment Status</th>
	 <th> Edit </th>
  </tr>
  <tr>
    <td>Mert</td>
    <td>Karababa</td>
    <td>0555-555-555</td>
	 <td>32D</td>
	 <td>12/12/2021</td>
	 <td>Rent Paid</td>
	 	 <td><button class="editbtn">edit</button></td>

  </tr>
  <tr>
        <td>ALİ</td>
    <td>ALİ</td>
    <td>0555-444-444</td>
	 <td>33D</td>
	 <td>12/12/2020</td>
	 <td>Rent Not Paid</td>
		 <td><button class="editbtn">edit</button></td>

  </tr>
  <button type="button" class ="button" >Add New Tenant</button>
    <button type="button" class ="button" >Delete Tenant</button>
	  <button type="button" class ="button" >Renew-Add Contract</button>


</table>
</body>
</html>



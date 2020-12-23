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
	<title> Table for LandLord </title>

<link rel="stylesheet" href="Main.css">

<div class="topnav">
  <a href="home.php" class="active">Dashboard</a>
  <a href="adminlogin.php">Admin Login </a>
  <a href="Apartments.php">Apartments</a>
  <a href="Tenants.php">Tenants</a>
   <a href="Landlord.php">Landlords</a>
  
</div>
</head>
<body>


<h2> Available Rooms </h2>

<table style="width:75%">

  <tr>
    <th>Address</th>
    <th>Room No</th>
    <th>Available</th>
    <th>Room Type</th>
	<th>Room Price</th>
	<th>Edit</th>
  </tr>
  <tr>
    <td>kültür 123x mah x</td>
    <td>32D</td>
    <td>Full</td>
    <td>2+1</td>
	 <td>750TL</td>
	 <td><button class="editbtn">edit</button></td>
	 
  </tr>
  <tr>
      <td>kültür 1515x mah x</td>
    <td>33D</td>
    <td>Empty</td>
    <td>3+1</td>
	<td>1000 TL</td>
	 <td><button class="editbtn">edit</button></td>
  </tr>
  <button type="button" class ="button" >Add New Room</button>
    <button type="button" class ="button" >Delete Room</button>


</table>
</body>
</html>

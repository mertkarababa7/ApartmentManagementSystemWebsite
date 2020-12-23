<?php 

include 'db_conn.php';

$conn = mysqli_connect('localhost', 'root', '' , 'apartment'); //The Blank string is the password


$query = "SELECT * FROM customer"; //You don't need a ; like you do in SQL
$result = mysqli_query($conn,$query);



echo "</table>"; //Close the table in HTML



 ?>

<!DOCTYPE html>
<html>
<head>
	<title> Table for LandLord </title>
<style>
body {
 background-image: url("homepage.jpg");
 background-color: #cccccc;
   background-repeat: no-repeat;
   background-size: cover;
 
}   
</style>



<link rel="stylesheet" href="Main.css">

<div class="topnav">
   <a href="registerCustomer.php" class="active">Register Customer</a>
 <a href="registerAdmin.php" class="active">Register Admin</a>
  <a href="logout.php">Admin LogOut </a>
  <a href="Apartments.php">Apartments</a>
  <a href="Tenants.php">Tenants</a>
  <a href="Landlord.php">Costumers</a>
 
</div>
</head>
<body>


<h2> Tenants </h2>

<table style="width:75%">


  <tr>
    <?php 
    echo "<table>"; // start a table tag in the HTML
   
while($row = mysqli_fetch_assoc($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['name'] . "</td><td>" . $row['surname'] ."</td><td>".  $row['email']."</td><td>".  $row['door_number']."</td><td>".  $row['deposit']. "</td></tr>";  
}?>
       
    

	 <td><button class="editbtn">edit</button></td>
	
  </tr>
  <button type="button" class ="button" >Add New LandLord</button>
    <button type="button" class ="button" >Delete LandLord</button>


</table>
</body>
</html>
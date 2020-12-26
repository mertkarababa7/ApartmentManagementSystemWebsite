<?php 
include 'checklogin.php';


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
</style>
<link rel="stylesheet" href="Main.css">
<link rel="stylesheet" href="admin.css">

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
<h1> Apartment Management System </h1>


<h1> Welcome! <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
<h2> Your Registered ID==> <?php echo $_SESSION['id']; ?></h2>
<h3>Your User name is==><?php echo $_SESSION['user_name']; ?> </h3>


     <h2><a href="logout.php">Logout</a> <h2>

</body>
</html>


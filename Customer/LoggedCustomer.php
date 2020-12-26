<?php 

include 'checkCustomerLogin.php';

 ?>

<!DOCTYPE html>
<html>
<head>
	<title> Customer Logged In </title>
  
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
 <a href="customer/borc.php" class="active">Check Borç</a>
 <a href="registerAdmin.php" class="active">Register Admin</a>
  <a href="logoutCustomer.php">Customer LogOut </a>
  <a href="Landlord.php">Costumers</a>
  
    
  
</div>
</head>
<body>
<h1>  Customer Logged In </h1>


<h1> Welcome Customer! <h1>Hello, <?php echo $_SESSION['name']; ?></h1>




     <h2><a href="logout.php">Logout</a> <h2>

</body>
</html>


<?php
include 'checklogin.php';
include '../db_conn.php';

$bl=$_GET['bl'];
$fe=$_GET['fe'];


?>



<!DOCTYPE html>
<html lang="en">
<head>

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
<meta charset="UTF-8">
<title>Update Fees </title>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="Admin.css">

</head>
<div class="topnav">
 <a href="registerCustomer.php" class="active">Register Customer</a>
 
 <a href="admin.php" class="active">Return Home</a>
  <a href="logout.php">Admin LogOut </a>
  <a href="Apartments.php">Apartments</a>
  <a href="Tenants.php">Tenants</a>
  <a href="Landlord.php">Costumers</a>
  
    
  
</div>
<body>
<form action="" method="GET">
    <p>
        <label for="User name">Block No</label>
        <input type="text" name="Block"  id="Block No">
    </p>
    <p>
        <label for="name">Fee </label>
        <input type="text" name="Fee"   id="Fee">
    </p>
    
        
    
    
          
 
   <div>
<a href='updatefee.php?bl=$result[Block]&fe=$result[fee]' ><input type='submit' value='Update Fee' name='submit' id='updatebutton' ></a>
   
  </div>
</form>
</body>
</html>

<?php

if (isset($_GET['submit']))
{

  
   $Block=$_GET['Block'];
    $Fee=$_GET['Fee'];
$query="UPDATE flats SET Block='$Block',fee='$Fee' WHERE Block='$Block'";
$data=mysqli_query($conn,$query);
if(isset($data))
{

  echo "<script>alert('record is updated')</script>";
 header("Location: viewflats.php");
}
else{
 echo "There is an Error ";
}
}
?>
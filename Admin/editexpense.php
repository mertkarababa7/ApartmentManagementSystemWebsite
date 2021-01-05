<?php
include 'checklogin.php';
include '../db_conn.php';

$ei=$_GET['ei'];
$sp=$_GET['sp'];
$dt=$_GET['dt'];
$ex=$_GET['ex'];


?>

<!DOCTYPE html>
<html lang="en">
<head>

  <style>

</style>
<meta charset="UTF-8">
<title>Add Admin </title>
<link rel="stylesheet" href="Main.css">
<link rel="stylesheet" href="admin.css">

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
        <label for="name">Spent </label>
        <input type="text" name="spent"  value="<?php echo "$sp" ?>" id="lastName">
    </p>
    <p>
        <label for="name">Total expense </label>
        <input type="text" name="expense"  value="<?php echo "$ex" ?>" id="lastName">
    </p>
     <p>
        <label for="name">Details</label>
        <input type="text" name="Details"  value="<?php echo "$dt" ?>" id="lastName">
    </p>
    <p>
       
        <input type="hidden" name="expenseID" value="<?php echo "$ei" ?>" id="firstName">
    </p>
     

   <div>

   <input type="submit" name="submit" class="updatebutton"  value="Spend" />

  </div>
</form>
</body>
</html>

<?php

if (isset($_GET['submit']))
{
  $expense=$_GET['expense'];
  $expenseID=$_GET['expenseID'];
  $spent=$_GET['spent'];
  $Details=$_GET['Details'];
$query="UPDATE expenses  SET spent='$spent',Details='$Details' WHERE id='$expenseID'";
$data=mysqli_query($conn,$query);
if(isset($data))
{

  echo "<script>alert('record is updated')</script>";
 header("Location: viewExpenses.php");
}
else{
 echo "There is an Error ";
}
}
?>
<?php
include 'checklogin.php';
include '../db_conn.php';

$ci=$_GET['ci'];
$bo=$_GET['bo'];
$fl=$_GET['fl'];
$pr=$_GET['pr'];
$dr=$_GET['dr'];
$fe=$_GET['fe'];

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
        <label for="User name">Flat id</label>
        <input type="text" name="flatID" value="<?php echo "$ci" ?>" id="firstName">
    </p>
    <p>
        <label for="name">Block </label>
        <input type="text" name="Block"  value="<?php echo "$bo" ?>" id="lastName">
    </p>
     <p>
        <label for="name">Floor</label>
        <input type="text" name="floor"  value="<?php echo "$fl" ?>" id="lastName">
    </p>
     <p>
        <label for="name"> Price</label>
        <input type="text" name="price"  value="<?php echo "$pr" ?>" id="lastName">
    </p>  <p>
        <label for="name"> Door Number</label>
        <input type="text" name="DoorNumber"  value="<?php echo "$dr" ?>" id="lastName">
    </p>
  <p>
        <label for="name">Monthly Fee</label>
        <input type="text" name="Fee"  value="<?php echo "$fe" ?>" id="lastName">
    </p>
    
    
          
 
   <div>

   <input type="submit" name="submit" class="updatebutton"  value="Update Costumer" />

  </div>
</form>
</body>
</html>

<?php

if (isset($_GET['submit']))
{

  $flatID=$_GET['flatID'];
   $Block=$_GET['Block'];
    $price=$_GET['price'];
     $DoorNumber=$_GET['DoorNumber'];
      $floor=$_GET['floor'];
    $Fee=$_GET['Fee'];
$query="UPDATE flats SET flat_id='$flatID',Block='$Block',price='$price',door_number='$DoorNumber',floor='$floor',fee='$Fee' WHERE flat_id='$flatID'";
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
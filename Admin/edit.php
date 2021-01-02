<?php
include 'checklogin.php';
include '../db_conn.php';

$ci=$_GET['ci'];
$na=$_GET['na'];
$su=$_GET['su'];
$dn=$_GET['dn'];
$pn=$_GET['pn'];
$em=$_GET['em'];
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
<a href="Landlord.php" class="active">Back</a>
 <a href="admin.php" class="active">Return Home</a>
 
  
    
  
</div>
<body>
<form action="" method="GET">
    <p>
        <label for="User name">Customer ID</label>
        <input type="text" name="customerID" value="<?php echo "$ci" ?>" id="firstName">
    </p>
    <p>
        <label for="name"> Name</label>
        <input type="text" name="name"  value="<?php echo "$na" ?>" id="lastName">
    </p>
     <p>
        <label for="name"> Surname</label>
        <input type="text" name="surname"  value="<?php echo "$su" ?>" id="lastName">
    </p>
     <p>
        <label for="name"> Door Number</label>
        <input type="text" name="DoorNumber"  value="<?php echo "$dn" ?>" id="lastName">
    </p>
     <p>
        <label for="name"> Phone Number</label>
        <input type="text" name="PhoneNumber"  value="<?php echo "$pn" ?>" id="lastName">
    </p>
      <p>
        <label for="name"> Email</label>
        <input type="text" name="email"  value="<?php echo "$em" ?>" id="lastName">
    </p>
    
    
          
 
   <div>

   <input type="submit" name="submit" value="Update Costumer" />

  </div>
</form>
</body>
</html>

<?php

if (isset($_GET['submit']))
{

  $customerID=$_GET['customerID'];
   $name=$_GET['name'];
    $surname=$_GET['surname'];
     $DoorNumber=$_GET['DoorNumber'];
      $PhoneNumber=$_GET['PhoneNumber'];
       $email=$_GET['email'];
$query="UPDATE customer SET customer_id='$customerID',name='$name',surname='$surname',door_number='$DoorNumber',email='$email',phone_number='$PhoneNumber' WHERE customer_id='$customerID'";
$data=mysqli_query($conn,$query);
if(isset($data))
{

  echo "<script>alert('record is updated')</script>";
 header("Location: Landlord.php");
}
else{
 echo "There is an Error ";
}
}
?>
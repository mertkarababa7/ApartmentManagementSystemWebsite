<?php
include 'CheckCustomerLogin.php';
include '../db_conn.php';

$em=$_GET['em'];
$ph=$_GET['ph'];
$ci=$_GET['ci'];

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <style>

</style>
<meta charset="UTF-8">
<title>Add Admin </title>
<link rel="stylesheet" href="Main.css">
<link rel="stylesheet" href="customer.css">

</head>
<div class="topnav">
<a href="LoggedCustomer.php" class="active">Home Page</a>
<a href="borc.php">Pay Rent</a>
<a href="fee.php" >Pay Fee</a>
<a href="expenses.php" >Expenses</a>
<a href="logoutCustomer.php">Costumer Log Out </a>
<a href="Announcement.php" >Announcements </a>
  
    
  
</div>
<body>
<form action="" method="GET">
    <p>
        <label for="User name">Your Email</label>
        <input type="text" name="email" value="<?php echo "$em" ?>" id="firstName">
    </p>
    <p>
        <label for="name"> Your Phone Number</label>
        <input type="text" name="phone"  value="<?php echo "$ph" ?>" id="lastName">
    </p>
      
  
    
        <input type="hidden" name="CID"  value="<?php echo "$ci" ?>" id="lastName">
    
      
    
          
 
   <div>

   <input type="submit" name="submit" value="Update Your Informations" />

  </div>
</form>
</body>
</html>

<?php

if (isset($_GET['submit']))
{

  $email=$_GET['email'];
   $phone=$_GET['phone'];
    $CID=$_GET['CID'];

$query="UPDATE customer SET email='$email',phone_number='$phone' WHERE customer_id='$CID'";
$data=mysqli_query($conn,$query);
if(isset($data))
{

  echo "<script>alert('record is updated')</script>";
 header("Location: LoggedCustomer.php");
}
else{
 echo "There is an Error ";
}
}
?>
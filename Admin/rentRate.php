<?php
include 'checklogin.php';
include '../db_conn.php';




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
      <label for="name">Write Rate 1 to 100 </label>
      <input type="text" name="rate"   id="Fee">
    </p>
     <div class="rlform-group">    
    
  <?php 
  
  $result = $conn->query("SELECT Block FROM flats GROUP BY Block ") or die($conn->error);?>
<select name="Block">
    <option value="Block">Select Block</option>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['Block'] . "'>" . $row['Block'] . "</option>";
    }
    ?>        
</select>
 </div>


    
    


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
 $rate=$_GET['rate'];


 $qry = "UPDATE flats SET price = CONVERT(price * ".(1+$rate/100).",UNSIGNED) WHERE Block='".$Block ."'";
 $run=mysqli_query($conn,$qry);
 if($run=TRUE){
  ?>
  <script>

    alert('Payment Successfull !!');
    window.open('viewflats.php','_self');

  </script>
  <?php
}
}
?>
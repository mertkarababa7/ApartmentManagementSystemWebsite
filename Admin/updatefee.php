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

  <a href="viewflats.php" class="active" >Back</a> 
  <a href="admin.php" class="active" >Return Home</a>

 
</div>
<body>
<form action="" method="GET">
   
    <p>
        <label for="name">Select Block And Enter Fee </label>
        <input type="text" name="Fee"   id="Fee">
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
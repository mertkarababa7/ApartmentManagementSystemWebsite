<?php 

include '../db_conn.php';

 ?>

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

<!DOCTYPE html>
<html>
<head>
	<title> Table for flats </title>
<style>
body {
 background-image: url("homepage.jpg");
 background-color: #cccccc;
   background-repeat: no-repeat;
   background-size: cover;
 
}  

</style>



<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="Admin2.css">
<div class="topnav">
   <a href="registerCustomer.php" class="active">Register Customer</a>
 <a href="registerAdmin.php" class="active">Register Admin</a>
  <a href="logout.php">Admin LogOut </a>
  <a href="Apartments.php">Apartments</a>
  <a href="Tenants.php">Tenants</a>
  <a href="admin.php" class="active">Return Home</a>
 
</div>
</head>
<body>


<h2> Flats </h2>





<table class="styled-table" border="2" cellspacing="7">
   
  <tr "active-row">
    <th>Block</th>
    <th>Door Number</th>
    <th>Floor</th>
    <th>Price</th>
     <th>Fee</th>
    
      <th colspan="2" align="center">Database Operations</th>
  </tr>

<?php 
//update fees
$query = "SELECT * FROM flats ; ";
$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
echo "<a href='deneme1.php?bl=$result[Block]&fe=$result[fee]' ><input type='submit' value='Update Fee' id='updatebutton' ></a>"; ?>

<?php 
//update fees
$query = "SELECT * FROM flats; ";
$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
echo "<a href='updatefee.php?bl=$result[Block]&fe=$result[fee]' ><input type='submit' value='Update Fee' id='updatebutton' ></a>"; ?>


    <?php 

$query = "SELECT * FROM flats ORDER BY flat_id ASC; ";

$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
   if($total!=0)
   {
while($result = mysqli_fetch_assoc($data)){   //Creates a loop to loop through results

echo "  <tbody><tr class='active-row'>
<td>".$result['Block']."</td>
<td>".$result['door_number']."</td>
<td>".$result['floor']."</td>
<td>".$result['price']."</td>
<td>".$result['fee']."</td>
<td><a href='editflat.php?ci=$result[flat_id] & bo=$result[Block] &fl=$result[floor] & pr=$result[price] & dr=$result[door_number]& fe=$result[fee]' ><input type='submit' value='update' id='updatebutton' ></a></td>
<td><a href='deleteflat.php?ci=$result[flat_id]'onclick='return checkdelete()' ><input type='submit' value='Delete' id='dltbutton' ></a> </td>

</tr>";

}

}
else{
  echo "no records";
}
?>
  
</table>

<script>
  function checkdelete()
  {
    return confirm('Are you sure you want to delete this Customer')
  }
</script>

</body>
</html>
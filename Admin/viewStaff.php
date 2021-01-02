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
	<title> Table for Staff </title>
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
 <a href="registerCustomer.php" >Register Customer</a>
 <a href="registerAdmin.php" >Register Admin</a>
  <a href="logout.php">Admin LogOut </a>
  <a href="Apartments.php">Apartments</a>
  <a href="Tenants.php">Payments</a>
  <a href="Landlord.php">Costumers</a>
  <a href="expenses.php">Expenses</a>
  <a href="registerAnnouncement.php">Create Announcements</a>
  <a href="admin.php" class="active">Return Home</a>
   <a href="search.php">Search</a>
</div>
</head>
<body>


<h2> Staff </h2>





<table class="styled-table" border="2" cellspacing="7">
   
  <tr "active-row">
    <th>name</th>
    <th>job</th>
    <th>Block</th>
    <th>phone number</th>
    <th>Details</th>
  </tr>

    <?php 

$query = "SELECT * FROM staff ORDER BY id ASC; ";

$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
   if($total!=0)
   {
while($result = mysqli_fetch_assoc($data)){   //Creates a loop to loop through results

echo "  <tbody><tr class='active-row'>
<td>".$result['name']."</td>
<td>".$result['job']."</td>
<td>".$result['phoneNumber']."</td>
<td>".$result['Details']."</td>

<td><a href='deletestaff.php?si=$result[id]'onclick='return checkdelete()' ><input type='submit' value='Delete' id='dltbutton' ></a> </td>

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
    return confirm('Are you sure you want to delete this Expense')
  }
</script>

</body>
</html>
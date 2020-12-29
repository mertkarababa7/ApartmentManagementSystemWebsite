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
    <th>Expense Price</th>
    <th>Details</th>
    <th>Block</th>
    <th>Expense Opened Date</th>
    <th>Delete Expense</th>
    <th>View Expenses Paid</th>
  </tr>

    <?php 

$query = "SELECT * FROM expenses ORDER BY id ASC; ";

$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
   if($total!=0)
   {
while($result = mysqli_fetch_assoc($data)){   //Creates a loop to loop through results

echo "  <tbody><tr class='active-row'>
<td>".$result['expense']."</td>
<td>".$result['Details']."</td>
<td>".$result['Block']."</td>
<td>".$result['date']."</td>

<td><a href='deleteExpense.php?id=$result[id]'onclick='return checkdelete()' ><input type='submit' value='Delete' id='dltbutton' ></a> </td>

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
<?php 

include '../db_conn.php';


 ?>

<!DOCTYPE html>
<html>
<head>
	<title> Table for LandLord </title>
<style>
body {
 background-image: url("homepage.jpg");
 background-color: #cccccc;
   background-repeat: no-repeat;
   background-size: cover;
 
}   
</style>



<link rel="stylesheet" href="Main.css">
<link rel="stylesheet" href="admin.css">
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


<h2> Tenants </h2>

<table style="width:75%">

<table border="2" cellspacing="7">

  <tr>
    <th>Name</th>
    <th>Surname</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Door Number</th>
     <th>Deposit</th>
      <th colspan="2" align="center">Database Operations</th>
  </tr>
    <?php 
   
$query = "SELECT * FROM customer";
$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
   if($total!=0)
   {
while($result = mysqli_fetch_assoc($data)){   //Creates a loop to loop through results

echo "<tr>
<td>".$result['name']."</td>
<td>".$result['surname']."</td>
<td>".$result['email']."</td>
<td>".$result['phone_number']."</td>
<td>".$result['door_number']."</td>
<td>".$result['deposit']."</td>
<td><a href='edit.php? ci=$result[customer_id] & na=$result[name] &su=$result[surname] & em=$result[email] &dn=$result[door_number]& pn=$result[phone_number]' >Edit </td>
<td><a href='update.php?ci=$result[customer_id]'onclick='return checkdelete()' >Delete </td>
</tr>


";

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
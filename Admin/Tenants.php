
<?php 
include 'checklogin.php';
include '../db_conn.php';

 ?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
 background-image: url("homepage.jpg");
 background-color: #cccccc;
   background-repeat: no-repeat;
   background-size: cover;
 

}  
td {
    display: table-cell;
    vertical-align: inherit;
} 
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
	<title> Table for Tenants </title>

<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="Admin.css">
<div class="topnav">
 <a href="registerCustomer.php" class="active">Register Customer</a>
 <a href="registerAdmin.php" class="active">Register Admin</a>
  <a href="logout.php">Admin LogOut </a>
  <a href="Apartments.php">Apartments</a>
  <a href="admin.php" class="active">Return Home</a>
  <a href="Landlord.php">Costumers</a>
  
</div>
</head>
<body>


<h2> Tenants </h2>

<table class="styled-table" border="2" cellspacing="7">
   
  <tr "active-row">
    <th colspan="2" align="center">Costumer Full Name</th>
    <th>Paid Date</th>
    <th>Amount Paid</th>
    <th>Payment ID</th>
       <th>Operations </th>
  </tr>


    <?php 

$query = "SELECT * FROM transaction ORDER BY name ASC; ";
//TO see better with ascending door numbers
$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
   if($total!=0)
   {
while($result = mysqli_fetch_assoc($data)){   //Creates a loop to loop through results

echo "  <tbody><tr class='active-row'>
<td>".$result['name']."</td>
<td>".$result['surname']."</td>
<td>".$result['date']."</td>
<td>".$result['amount']."</td>
<td>".$result['id']."</td>
<td><a href='deletepayment.php?ci=$result[id]'onclick='return checkdelete()' ><input type='submit' value='Delete' id='dltbutton' ></a> </td>
</tr>";

}
}
else{
  echo "no records";
}
?>
  
  <script>
  function checkdelete()
  {
    return confirm('Are you sure you want to delete this Payment')
  }
</script>
</table>
</body>
</html>



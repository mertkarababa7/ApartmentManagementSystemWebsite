
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
  a.button {
    background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  margin: 25px 20px 25px 0px;
  width: 1000px;
   border:2px solid black;
  
}
</style>
	<title> Payments</title>

  

<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="Admin.css">
<div class="topnav">
  <a href="registerCustomer.php"  >Register Costumer</a>
 <a href="registerAdmin.php" >Register Admin</a>
  <a href="logout.php">Admin LogOut </a>
  <a href="Apartments.php">Apartments</a>
  <a href="admin.php" class="active">Return Home</a>
  <a href="Landlord.php">Costumers</a>
  <a href="expenses.php">Expenses</a>
  <a href="registerAnnouncement.php">Create Announcements </a>
  <a href="registerStaff.php">Register Staff</a>
  <a href="search.php" >Search</a>
  
</div>
</head>
<body>

</form>
<form  method="post">

<a href="balance.php" class="button">View Rent Balance</a>
   
</form>
<h2>Table for Payments </h2>

<table class="styled-table" border="2" cellspacing="7">
   
  <tr "active-row">
    <th colspan="2" align="center">Costumer Full Name</th>
    <th>Paid Date</th>
    <th>Amount Paid</th>
    <th>Payment ID</th>
       <th>Operations </th>
  </tr>


    <?php 

$query = "SELECT * FROM transaction ORDER BY date DESC; ";
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
</table>






  <script>
  function checkdelete()
  {
    return confirm('Are you sure you want to delete this Payment')
  }
</script>
</table>
</div>
</div>
</body>
</html>



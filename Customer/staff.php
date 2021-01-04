<?php 

include '../db_conn.php';
include 'CheckCustomerLogin.php'
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
<link rel="stylesheet" href="customer.css">
<div class="topnav">
 <a href="LoggedCustomer.php" >Home Page</a>
<a href="borc.php">Pay Rent</a>
<a href="fee.php" >Pay Fee</a>
<a href="expenses.php" >Expenses</a>
<a href="logoutCustomer.php">Costumer Log Out </a>
<a href="Announcement.php" >Announcements </a>
  <a href="staff.php" class="active">Staff </a>
</div>
</head>
<body>


<h2> Staff Details </h2>




<h2>
<table class="styled-table" border="2" cellspacing="7">
   
  <tr "active-row">
    <th>name</th>
    <th>Block</th>
    <th>job</th>
    <th>phone number</th>
    <th>Available Hours</th>
  </tr>
<?php 
    $tid=$_SESSION['customer_id'];
$block=$_SESSION['Block'];
$query = "SELECT * FROM staff where Block='$block' order by  job";
$result = $conn->query($query);

$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
   if($total>0)
   {
while($result = mysqli_fetch_assoc($data)){   

echo "  <tbody><tr class='active-row'>
<td>".$result['name']."</td>
<td>".$result['Block']."</td>
<td>".$result['job']."</td>
<td>".$result['phoneNumber']."</td>
<td>".$result['Details']."</td>
        
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
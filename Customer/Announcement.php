<?php 

include '../db_conn.php';
include 'CheckCustomerLogin.php';
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
  <title> View Announcements   </title>
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
  <a href="LoggedCustomer.php">Home Page</a>
<a href="borc.php">Pay Rent</a>
<a href="fee.php" >Pay Fee</a>
<a href="expenses.php" >Expenses</a>
<a href="logoutCustomer.php">Costumer Log Out </a>
  <a href="Announcement.php"class="active" >Announcements </a>
   <a href="staff.php" >Staff </a>
</div>
</head>
<body>


<h2> Announcements 




<table class="styled-table" border="2" cellspacing="7">
   
  <tr "active-row">
   
 
    <th>Head</th>
    <th>Details</th>
     <th>Start Time</th>
     <th>Mandatory</th>
        <th>Opened Date</th>
  </tr>


    <?php 
$block=$_SESSION['Block'];
$query = "SELECT * FROM announcement where Block='$block' ; ";
$result = $conn->query($query);

$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
   if($total>0)
   {
while($result = mysqli_fetch_assoc($data)){   //Creates a loop to loop through results

echo "  <tbody><tr class='active-row'>
<td>".$result['head']."</td>
<td>".$result['details']."</td>
<td>".$result['time']."</td>
<td>".$result['mandatory']."</td>
<td>".$result['openedDate']."</td>

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
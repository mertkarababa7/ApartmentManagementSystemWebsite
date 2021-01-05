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
  <a href="registerCustomer.php"  >Register Costumer</a>
  <a href="registerAdmin.php" >Return Home</a>
  <a href="logout.php">Admin LogOut </a>
  <a href="admin.php" class="active">Return Home</a>
  <a href="Tenants.php">Payments</a>
  <a href="Landlord.php">Costumers</a>
  <a href="expenses.php">Expenses</a>
  <a href="registerAnnouncement.php">Create Announcements </a>
  <a href="registerStaff.php">Register Staff</a>
  <a href="search.php" >Search</a>

</div>
</head>
<body>

  <?php 
//update fees
  $query = "SELECT * FROM flats ; ";
  $data = mysqli_query($conn,$query);
  $total=mysqli_num_rows($data);
  $result = mysqli_fetch_assoc($data);
  echo "<a href='rentRate.php' ><input type='submit' value='Rent Rate' id='dltbutton' ></a>"; ?>

  <?php 
//update fees
  $query = "SELECT * FROM flats; ";
  $data = mysqli_query($conn,$query);
  $total=mysqli_num_rows($data);
  $result = mysqli_fetch_assoc($data);
  echo "<a href='updatefee.php' ><input type='submit' value='Update Fee' id='updatebutton' ></a>"; ?>
  <?php 

  echo "<a href='viewFee.php' ><input type='submit' value='View Fee Details' id='updatebutton' ></a>"; ?>
  <table class="styled-table" border="2" cellspacing="7">
   
    <tr "active-row">
      <th>Block</th>
      <th>Door Number</th>
      <th>Floor</th>
      <th>Price</th>
      <th>Fee</th>
      
      <th colspan="2" align="center">Database Operations</th>
      <th>History</th>
    </tr>


    <h2> Flats </h2>

    <?php 

    $query = "SELECT * FROM flats ORDER   BY         
    CASE WHEN door_number REGEXP '^[A-Z]{2}'
    THEN 1 
    ELSE 0
    END ASC,
    CASE WHEN door_number REGEXP '^[A-Z]{2}'
    THEN LEFT(door_number, 2)
    ELSE LEFT(door_number, 1)
    END ASC,
    CASE WHEN door_number REGEXP '^[A-Z]{2}'
    THEN CAST(RIGHT(door_number, LENGTH(door_number) - 2) AS SIGNED)
    ELSE CAST(RIGHT(door_number, LENGTH(door_number) - 1) AS SIGNED)
    END DESC ";
    
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
  <td><a href='flathistory.php?dr=$result[door_number]&' ><input type='submit' value='history' id='updatebutton' ></a></td>
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
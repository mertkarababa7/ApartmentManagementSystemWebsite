
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
 <a href="registerCustomer.php"  >Register Costumer</a>
 <a href="registerAdmin.php" >Register Admin</a>
 <a href="logout.php">Admin LogOut </a>
 <a href="Apartments.php">Apartments</a>
 <a href="admin.php"class="active">Return Home</a>
 <a href="Landlord.php">Costumers</a>
 <a href="expenses.php">Expenses</a>
 <a href="registerAnnouncement.php">Create Announcements </a>
 <a href="registerStaff.php">Register Staff</a>
 <a href="search.php">Search</a>
</div>
</head>
<body>

  <h2> Balance </h2>
  <div class="balance-wrapper">
    <div>
      <label>Total</label>
      <table class="styled-table" border="2" cellspacing="7">

        <tr "active-row"> 

          <th>Block No</th>
          <th>Total Rents</th>


        </tr>


        <?php 


        $query = "SELECT Block, SUM(price) FROM flats GROUP BY Block";   
        $result = mysqli_query($conn,$query) or die(mysql_error());

        while($row = mysqli_fetch_array($result)){
          echo "  <tbody><tr class='active-row'>
          <td>".$row['Block']."</td>
          <td>".$row['SUM(price)']."</td>
          </tr>";
          
        }

        ?> 
      </table>
    </div>
    <div>
      <label>Paid Amount</label>
      <table class="styled-table" border="2" cellspacing="7">

        <tr "active-row">

          <th>Block No</th>
          <th>Paid Rents</th>


        </tr>


        <?php 


        $query = "SELECT Block, SUM(amount) FROM transaction GROUP BY Block";   
        $result = mysqli_query($conn,$query) or die(mysql_error());

        while($row = mysqli_fetch_array($result)){
          echo "  <tbody><tr class='active-row'>
          <td>".$row['Block']."</td>
          <td>".$row['SUM(amount)']."</td>
          </tr>";

        }


        ?> 

      </table>
    </div>
  </div>
</body>
</html>



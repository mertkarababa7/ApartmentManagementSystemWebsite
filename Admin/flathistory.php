
<?php 
include 'checklogin.php';
include '../db_conn.php';
   $dr=$_GET['dr'];
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
<title> Fee Balance </title>



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
 
  <h2>  Flat History FOR <?php echo "$dr"; ?>
    <div>
     Current Tenant
      <table class="styled-table" border="2" cellspacing="7">

        <tr "active-row"> 

     
          <th>Customer ID</th>
          <th>Name</th>
          <th>Surname</th>
          <th>Move In</th>
          <th>Phone Number</th>

        </tr>


        <?php 


        $query = "SELECT *FROM customer WHERE door_number='$dr'";   
        $result = mysqli_query($conn,$query) or die(mysql_error());

        while($row = mysqli_fetch_array($result)){
            echo "  <tbody><tr class='active-row'>
       
          <td>".$row['customer_id']."</td>
           <td>".$row['name']."</td>
            <td>".$row['surname']."</td>
             <td>".$row['date']."</td>
              <td>".$row['phone_number']."</td>
              </tr>
          ";
          
        }

        ?> 
      </table>
    </div>
    <div>
      Old Tenants
      <table class="styled-table" border="2" cellspacing="7">

        <tr "active-row">
   
          
          <th>Customer ID</th>
          <th>Name</th>
          <th>Surname</th>
          <th>Move In</th>
          <th>Move Out</th>
  

        </tr>


        <?php 
     
       $dr=$_GET['dr'];
        $query = "SELECT * FROM flathistory WHERE door_number='$dr' ";   
        $result = mysqli_query($conn,$query) or die(mysql_error());

        while($row = mysqli_fetch_array($result)){
          echo "  <tbody><tr class='active-row'>
          
          <td>".$row['customer_id']."</td>
           <td>".$row['name']."</td>
            <td>".$row['surname']."</td>
             <td>".$row['MoveIn']."</td>
              <td>".$row['MoveOut']."</td></tr>
          ";

        }


        ?> 

      </table>
    </div>
  </div>
</body>
</html>



 <?php  
  include '../db_conn.php';  
  include 'checklogin.php';
 if(isset($_POST["submit"]))  
 {  
  if(!empty($_POST["search"]))  
  {  
   $query = str_replace(" ", "+", $_POST["search"]);  
   header("location:search.php?search=" . $query);  
 }  
}  
?>  
<!DOCTYPE html>  
<html>  
<head>  
  <div class="topnav">

  <a href="registerCustomer.php" >Register Customer</a>
  <a href="registerAdmin.php" >Register Admin</a>
  <a href="logout.php">Admin LogOut </a>
  <a href="Apartments.php">Apartments</a>
  <a href="Tenants.php">Payments</a>
  <a href="Landlord.php">Costumers</a>
  <a href="expenses.php">Expenses</a>
  <a href="registerAnnouncement.php">Create Announcements </a>
  <a href="registerStaff.php">Register Staff</a>
  <a href="admin.php" class="active" >Return Home</a>
</div>
 <title>Search Page</title> 
 <link rel="stylesheet" href="Main.css">
 <link rel="stylesheet" href="admin.css"> 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 
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
 
</head>  
<body>  
 <br /><br />  

 <div class="balance-wrapper" style="width:500px;">
   <div>

    <h3 align="center">Search Customers</h3><br />  
    <form method="post">  
     <label>Search By Customer Name</label>  
     <input type="text" name="search" class="form-control" value="<?php if(isset($_GET["search"])) echo $_GET["search"]; ?>" />  
     <br />  
     <input type="submit" name="submit" class="rlform-btn" value="Search" />  
   </form>  
   <br /><br />    
     <table class="styled-table" border="2" cellspacing="7"> 
  <tr "active-row"> 
    
    <th>CustomerID</th>
    <th>Name</th>
    <th>Surname</th>
    <th>DoorNo</th>
   <th>BlockNo</th>
       
  </tr>
       <?php  
       if(isset($_GET["search"]))  
       {  
        $condition = '';  
        $query = explode(" ", $_GET["search"]);  
        foreach($query as $text)  
        {  
         $condition .= "name LIKE '%".mysqli_real_escape_string($conn, $text)."%' OR ";  
       }  
       $condition = substr($condition, 0, -4);  
       $sql_query = "SELECT * FROM customer WHERE " . $condition;  
       $result = mysqli_query($conn, $sql_query);  
       if(mysqli_num_rows($result) > 0)  
       {  
         while($row = mysqli_fetch_array($result))  
         {  
          echo "  <tbody><tr class='active-row'>
<td>".$row['customer_id']."</td>
<td>".$row['name']."</td>
<td>".$row['surname']."</td>
<td>".$row['door_number']."</td>
<td>".$row['Block']."</td> 
</tr>";
          }  
        }  
        else  
        {  
         echo '<label>Data not Found</label>';  
       }  
     }  
     ?>  
   </table>  

 </div>  


 <div>
  <h3 align="center">Search Flats</h3><br />  
  <form method="post">  
   <label>Search by Door Number</label>  
   <input type="text" name="search2" class="form-control" value="<?php if(isset($_GET["search2"])) echo $_GET["search2"]; ?>" />  
   <br />  
   <input type="submit" name="submit2" class="rlform-btn" value="Search" />  
 </form>  
 <br /><br />  

 <table class="styled-table" border="2" cellspacing="7">  
    <tr "active-row"> 
    
    <th>FlatID</th>
     <th>BlockNo</th>
    <th>DoorNo</th>
   <th>Price</th>
       <th>Fee</th>
  </tr>
   <?php  
   include '../db_conn.php';
   if(isset($_POST["submit2"]))  
   {  
    if(!empty($_POST["search2"]))  
    {  
     $query2 = str_replace(" ", "+", $_POST["search2"]);  
     header("location:search.php?search2=" . $query2);  
   }  
 }  
 ?> 
 <?php  
 if(isset($_GET["search2"]))  
 {  
  $condition2 = '';  
  $query2 = explode(" ", $_GET["search2"]);  
  foreach($query2 as $text2)  
  {  
   $condition2 .= "door_number LIKE '%".mysqli_real_escape_string($conn, $text2)."%' OR ";  
 }  
 $condition2 = substr($condition2, 0, -4);  
 $sql_query1 = "SELECT * FROM flats WHERE " . $condition2;  
 $result1 = mysqli_query($conn, $sql_query1);  
 if(mysqli_num_rows($result1) > 0)  
 {  
   while($row1 = mysqli_fetch_array($result1))  
   {  
   echo "  <tbody><tr class='active-row'>
<td>".$row1['flat_id']."</td>
<td>".$row1['Block']."</td>
<td>".$row1['door_number']."</td>
<td>".$row1['price']."</td>
<td>".$row1['fee']."</td>
</tr>";
    }  
  }  
  else  
  {  
   echo '<label>Data not Found</label>';  
 }  
}  
?>  
</table>  

</div>  


</body>  
</html> 
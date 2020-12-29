<?php
include 'checklogin.php';
include 'expensesFunction.php';
include '../db_conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

  
  <style>
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
<meta charset="UTF-8">
<title>Expenses </title>
<link rel="stylesheet" href="Main.css">
<link rel="stylesheet" href="Admin2.css">

</head>
<div class="topnav">
 <a href="registerCustomer.php" >Register Customer</a>
 
 <a href="registerAdmin.php" >Return Admin</a>
  <a href="logout.php">Admin LogOut </a>
  <a href="Apartments.php">Apartments</a>
  <a href="Tenants.php">Tenants</a>
  <a href="Landlord.php">Costumers</a>
     <a href="Admin.php" class="active">Return Home</a>
    
  
</div>
<body>
<form  method="post">
    <p>
        <label for="User name">Expense</label><br>
        <input type="text" name="expense" >
    </p>
    <p>
        <label for="name">Detail</label><br>
        <input type="text" name="detail" >
    </p>
  
     <div class="rlform-group">    
    
  <?php 
  $result = $conn->query("SELECT Block FROM flats ORDER BY flat_id DESC ") or die($conn->error);?>
<select name="Block">
    <option value="Block">Select Block</option>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['Block'] . "'>" . $row['Block'] . "</option>";
    }
    ?>        
</select>
 </div>
          
    
   <div>
    <button class="rlform-btn" name="signUp">Send Expenses To Costumers
    </button>
  </div>
</form>
<form  method="post">

<a href="viewExpenses.php" class="button">View/Update/Delete Flats</a>
   
</form>
</body>
</html>
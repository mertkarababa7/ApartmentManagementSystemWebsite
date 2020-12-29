<?php
include 'checklogin.php';
include 'registerapartment.php';
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
<title>Add Admin </title>
<link rel="stylesheet" href="Main.css">
<link rel="stylesheet" href="Admin2.css">

</head>
<div class="topnav">
    <a href="registerCustomer.php" >Register Customer</a>
 <a href="registerAdmin.php" >Register Admin</a>
  <a href="logout.php">Admin LogOut </a>
  <a href="Admin.php"class="active" >Return Home</a>
  <a href="Tenants.php">Tenants</a>
   <a href="Landlord.php">Costumers</a>
   <a href="expenses.php">Expenses</a>
    
  
</div>
<body>

   <div class="rlform-group">         
    <label>Block No</label>
    <br>
    <select name="Block">
    <option value="Block">Choose Block No</option>
     <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
    <option value="E">E</option>
  </select>
     </div>
  
    <p>
        <label for="name">Door No</label>
        <br>
        <input type="text" name="door_number"  value="<?php echo $_POST['Block'] ?? ''; ?>" id="lastName">
    </p>
    
        <label for="password">Floor:</label>
        <br>
        <input type="text" name="floor" id="emailAddress">
         <p>
        <label for="name"> Price:</label>
        <br>
        <input type="text" name="price"  value="<?php echo $_POST['price'] ?? ''; ?>" id="lastName">
    </p>
        <div>
          
    
   <div>
    <button class="rlform-btn" name="signUp">Add New Flats
    </button>
    <form  method="post">

<a href="viewflats.php" class="button">View/Update/Delete Flats</a>
   
</form>

  </div>
</form>
</body>
</html>
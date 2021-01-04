<?php
include 'checklogin.php';
include 'registerFunctionAdmin.php';
include '../db_conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <style>

</style>
<meta charset="UTF-8">
<title>Add Admin </title>
<link rel="stylesheet" href="Main.css">
<link rel="stylesheet" href="admin.css">

</head>
<div class="topnav">
 <a href="registerCustomer.php"  >Register Costumer</a>
 <a href="admin.php"class="active" >Return Home</a>
  <a href="logout.php">Admin LogOut </a>
  <a href="Apartments.php">Apartments</a>
  <a href="Tenants.php">Payments</a>
  <a href="Landlord.php">Costumers</a>
  <a href="expenses.php">Expenses</a>
  <a href="registerAnnouncement.php">Create Announcements </a>
  <a href="registerStaff.php">Register Staff</a>
  <a href="search.php" >Search</a>
  
</div>
<body>
  <h2>Admin Create Page</h2>
<form  method="post">
    <p>
        <label for="User name">User Name:</label>
        <input type="text" name="user_name" value="<?php echo $_POST['user_name'] ?? ''; ?>" id="firstName">
    </p>
    <p>
        <label for="name"> Name:</label>
        <input type="text" name="name"  value="<?php echo $_POST['name'] ?? ''; ?>" id="lastName">
    </p>
    
        <label for="password">Password:</label>
        <input type="password" name="password" id="emailAddress">
        
          <p>
              <label for="password">Phone Number:</label>
        <input type="text" class="form-control"  name="phoneNumber"   "/>
</p>
<p> <label for="password">Email:</label>
                 <input type="text" class="form-control" name="email"   "/>  
</p>
    <div>
   <div>
    <button class="updatebutton" name="signUp">Create A New Admin
    </button>

  </div>
</form>
</body>
</html>
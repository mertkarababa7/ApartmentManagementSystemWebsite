<?php
include 'checklogin.php';
include 'registerFunctionStaff.php';
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
<title>Register Staff </title>
<link rel="stylesheet" href="Main.css">
<link rel="stylesheet" href="admin.css">

</head>
<div class="topnav">
 <a href="registerCustomer.php" >Register Customer</a>
 <a href="registerAdmin.php" >Register Admin</a>
  <a href="logout.php">Admin LogOut </a>
  <a href="Apartments.php">Apartments</a>
  <a href="Tenants.php">Payments</a>
  <a href="Landlord.php">Costumers</a>
  <a href="expenses.php">Expenses</a>
  <a href="registerAnnouncement.php">Create Announcements</a>
  <a href="admin.php" class="active">Return Home</a>
   <a href="search.php">Search</a>
</div>
  
</div>
<body>
  <form  method="post">

<a href="viewStaff.php" class="button">View Staff</a>
   
</form>

<form  method="post">
  <h2>Create Staff</h2>
    <p>
        <label for="Staff">Staff Name</label>
        <input type="text" name="name" value="<?php echo $_POST['name'] ?? ''; ?>" id="firstName">
    </p>
    <p>
        <label for="job"> JOB:</label>
        <input type="text" name="job"  value="<?php echo $_POST['job'] ?? ''; ?>" id="lastName">
    </p>
     <p>
        <label for="job"> Available Hours</label>
        <input type="text" name="Details"  value="<?php echo $_POST['Details'] ?? ''; ?>" id="lastName">
    </p>
        <label for="phoneNumber">Phone Number:</label>
        <input type="text" name="phoneNumber" id="emailAddress">
        <div>
          
    
   <div>
    <button class="updatebutton" name="signUp">Create A NEW STAFF
    </button>

  </div>
</form>
</body>
</html>
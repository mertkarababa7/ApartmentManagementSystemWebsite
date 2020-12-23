<?php
include 'checklogin.php';
include 'registerFunctionAdmin.php';
include 'db_conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <style>
body {
 background-image: url("homepage.jpg");
 background-color: #cccccc;
   background-repeat: no-repeat;
   background-size: cover;
 
}   

  select{
    width:20%;

    padding: 16px 20px;

    -moz-appearance: none;/*firefox oku kaldırır*/

    border: none;

    font-size: 16px;

    border-radius: 4px;

    background-color: #4CAF50;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
label {
    cursor: pointer;
    color: black;
    font-size: large;
    font-weight: bold;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
 
  padding: 9px;
}
</style>
<meta charset="UTF-8">
<title>Add Admin </title>
<link rel="stylesheet" href="Main.css">

</head>
<div class="topnav">
 <a href="registerCustomer.php" class="active">Register Customer</a>
 <a href="registerAdmin.php" class="active">Register Admin</a>
  <a href="logout.php">Admin LogOut </a>
  <a href="Apartments.php">Apartments</a>
  <a href="Tenants.php">Tenants</a>
  <a href="Landlord.php">Costumers</a>
  
    
  
</div>
<body>
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
        <input type="text" name="password" id="emailAddress">
        <div>
          
    
   <div>
    <button class="rlform-btn" name="signUp">Create A New Admin
    </button>

  </div>
</form>
</body>
</html>
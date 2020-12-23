<?php
include 'checklogin.php';
include 'registerFunction.php';
include 'db_conn.php';
include 'db_conn.php';
?>

<!DOCTYPE html>
<html>

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
input[type=number], select {
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
<head>
<title>Add Customer</title>

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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Register Customer</title>
	

<body>
 <div class="rlform">
  <div class="rlform rlform-wrapper">
   <div class="rlform-box">
	<div class="rlform-box-inner">
	 <form method="post" >
	  <h2>Customer Create Page</h2>

     <div class="rlform-group">
	  <label>Customer Name</label>
	  <input type="text" name="name" value="<?php echo $_POST['name'] ?? ''; ?>" class="rlform-input" >
	 </div>
		
	 <div class="rlform-group">					
	  <label>Customer Surname</label>
	  <input type="text" name="surname" value="<?php echo $_POST['surname'] ?? ''; ?>" class="rlform-input" >
	 </div>
		
	
   
<div class="rlform-group">					
	  <label>Phone Number</label>
   
	  <input type="number" step="1" pattern="\d+" name="phone_number" value="<?php echo $_POST['phone_number'] ?? ''; ?>" id="phone_number" class="rlform-input" >
     </div>

     <div class="rlform-group">         
    <label>Email</label>
    <input type="text" name="email" id="email" value="<?php echo $_POST['email'] ?? ''; ?>" class="rlform-input" >
     </div>

     <div class="rlform-group">         
    <label>Number of people</label>
    <select name="people">
    <option value="people">Number Of People</option>
     <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>
     </div>
   
   <div class="rlform-group">         
    <label>Deposit</label>
    <select name="deposit">
    <option value="deposit">Deposit Paid</option>
     <option value="paid">paid </option>
    <option value="unpaid">unpaid</option>
  </select>
     </div>
   
	 
	
  <div class="rlform-group">    
    <label>Door Number</label>
  <?php 
  $result = $conn->query("SELECT flat_id,price,door_number FROM flats ORDER BY flat_id DESC LIMIT  0,12") or die($conn->error);?>
<select name="door_number">
    <option value="Door Number">Select Door Number</option>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['door_number'] . "'>" . $row['door_number'] . "\nPrice is>>'" . $row['price'] . "TL'</option>";
    }
    ?>        
</select>
 </div>
  <div class="rlform-group">    
    <label>Door Number</label>
  <?php 
  $result2 = $conn->query("SELECT id,user_name,name FROM users ORDER BY id DESC LIMIT  0,6") or die($conn->error);?>
<select name="user_name">
    <option value="user_name">Select Door Number</option>
    <?php
    while ($row = mysqli_fetch_array($result2)) {
        echo "<option value='" . $row['user_name'] . "'>'Your Registered Name is>>" . $row['user_name'] . "</option>";
    }
    ?>        
</select>
 </div>


<div>
	  <button class="rlform-btn" name="signUp">Create Customer
	  </button>

	</div>
	  </div>
	 </form>
	</div>
   </div>
  </div>
 </div>

	
</body>
</html
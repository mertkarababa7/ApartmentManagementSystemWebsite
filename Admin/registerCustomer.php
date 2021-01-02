<?php
include 'checklogin.php';
include 'registerFunction.php';
include '../db_conn.php';

?>

<!DOCTYPE html>
<html>




</style>
<head>
<title>Add Customer</title>

<link rel="stylesheet" href="Main.css">
  <link rel="stylesheet" href="x.css">  
</head>
<div class="topnav">
 <a href="admin.php" class="active" >Return Home</a>
 <a href="registerAdmin.php" >Register Admin</a>
  <a href="logout.php">Admin LogOut </a>
  <a href="Apartments.php">Apartments</a>
  <a href="Tenants.php">Payments</a>
  <a href="Landlord.php">Costumers</a>
  <a href="expenses.php">Expenses</a>
  <a href="registerAnnouncement.php">Create Announcements </a>
  <a href="registerStaff.php">Register Staff</a>
   <a href="search.php">Search</a>
  
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
    <label>Customer Password</label>
    <input type="text" name="CustomerPassword" value="<?php echo $_POST['CustomerPassword'] ?? ''; ?>" class="rlform-input" >
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
    <label>Block Number</label>
  <?php 
  $result = $conn->query("SELECT flat_id,price,door_number,Block FROM flats GROUP BY Block ASC") or die($conn->error);?>
<select name="Block">
    <option value="Block No">Select Block</option>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['Block'] . "'>" . $row['Block'] . "\nBlock No is>>''</option>";
    }
    ?>        
</select>
 </div>
	
  <div class="rlform-group">    
    <label>Door Number</label>
  <?php 
  $result = $conn->query("SELECT flat_id,price,door_number,Block FROM flats ORDER BY flat_id ASC") or die($conn->error);?>
<select name="door_number">
    <option value="Door Number">Select Door Number</option>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['door_number'] . "'>" . $row['door_number'] . "\nBlock No is>>''</option>";
    }
    ?>        
</select>
 </div>
 
  <div class="rlform-group">    
    <label>Admin</label>
  <?php 
  $result2 = $conn->query("SELECT id,user_name,name FROM users ORDER BY id DESC LIMIT  0,6") or die($conn->error);?>
<select name="user_name">
    <option value="user_name">Admin name</option>
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
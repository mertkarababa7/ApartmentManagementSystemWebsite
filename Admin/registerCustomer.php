<?php
include 'checklogin.php';
include 'registerFunction.php';
include '../db_conn.php';
include 'navbar.php';


?>

<!DOCTYPE html>
<html>




</style>
<head>
<title>Add Customer</title>
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
<link rel="stylesheet" href="Main.css">
  <link rel="stylesheet" href="admin.css">  
</head>

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
  
	
   
<div class="rlform-group">					
	  <label>Phone Number</label>
   
	  <input type="number" step="1" pattern="\d+" name="phone_number" value="<?php echo $_POST['phone_number'] ?? ''; ?>" id="phone_number" class="rlform-input" >
     </div>

     <div class="rlform-group">         
    <label>Email</label>
    <input type="text" name="email" id="email" value="<?php echo $_POST['email'] ?? ''; ?>" class="rlform-input" >
     </div>

     
   
  
   
	   <div class="rlform-group">    
    <label>Block Number</label>
  <?php 
  $result = $conn->query("SELECT Block FROM apartment GROUP BY Block ASC") or die($conn->error);?>
<select name="Block">
    <option value="Block No">Select Block</option>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['Block'] . "'>" . $row['Block'] . "</option>";
    }
    ?>        
</select>
 </div>
	
  <div class="rlform-group">    
    <label>Door Number</label>
  <?php 
  $result = $conn->query("SELECT door_number FROM flats where isfull='0'  ORDER BY CASE WHEN door_number REGEXP '^[A-Z]{2}'
    THEN 1 
    ELSE 0
    END ASC,
    CASE WHEN door_number REGEXP '^[A-Z]{2}'
    THEN LEFT(door_number, 2)
    ELSE LEFT(door_number, 1)
    END ASC,
    CASE WHEN door_number REGEXP '^[A-Z]{2}'
    THEN CAST(RIGHT(door_number, LENGTH(door_number) - 2) AS SIGNED)
    ELSE CAST(RIGHT(door_number, LENGTH(door_number) - 1) AS SIGNED)
    END DESC ") or die($conn->error);?>
<select name="door_number">
    <option value="Door Number">Select Door Number</option>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['door_number'] . "'>" . $row['door_number'] . "</option>";
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
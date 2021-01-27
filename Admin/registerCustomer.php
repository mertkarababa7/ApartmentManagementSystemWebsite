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

<link rel="stylesheet" href="Main.css">
  <link rel="stylesheet" href="admin.css">  
</head>

 <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

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
    <input type="password" name="CustomerPassword" value="<?php echo $_POST['CustomerPassword'] ?? ''; ?>" class="rlform-input" >
  
	
   
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
    <option value="Block">Select Block</option>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['Block'] . "'>" . $row['Block'] . "</option>";
    }
    ?>        
</select>
 </div>
	<br>
  <div class="rlform-group">    
    <label>Door Number</label>
  <?php 
  $result = $conn->query("SELECT flat_id,door_number,Block FROM flats where isfull='0' ") or die($conn->error);?>
<select name="door_number">
    <option value="Door Number">Select Door Number</option>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['door_number'] . "' >" . $row['door_number'] . "->" . $row['Block'] . "</option>";
    }
    ?>        
</select>
 </div>
 <br>
  


<div>
	  <button class="btn btn-primary btn-user" name="signUp">Create Customer
	  </button>

	</div>
	  </div>
	 </form>
	</div>
   </div>
  </div>
 </div>

	
</body>
 <script src="vendor/jquery/jquery.min.js"></script>
       <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

       <!-- Core plugin JavaScript-->
       <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

       <!-- Custom scripts for all pages-->
       <script src="js/sb-admin-2.min.js"></script>
</html
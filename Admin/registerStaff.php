<?php
include 'checklogin.php';
include 'registerFunctionStaff.php';
include '../db_conn.php';
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <style>

</style>
<meta charset="UTF-8">
<title>Add Staff </title>
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
<link rel="stylesheet" href="Main.css">
  <link rel="stylesheet" href="admin.css">  

</head>

<body>
   <div class="rlform">
  <div class="rlform rlform-wrapper">
   <div class="rlform-box">
  <div class="rlform-box-inner">
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
     <p>
        <label for="phoneNumber">Phone Number:</label>
        <input type="text" name="phoneNumber" id="emailAddress">
      </p>
       <p>
        <label for="Staff">Block name</label>
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
    
    </p>
    <button class="btn btn-primary btn-user " name="signUp">Create A NEW STAFF
    </button>

  </div>
</form>
</body>
</html>
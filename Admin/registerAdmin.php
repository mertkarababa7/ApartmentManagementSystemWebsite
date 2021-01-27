<?php
include 'checklogin.php';
include 'registerFunctionAdmin.php';
include '../db_conn.php';
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <style>

</style>
<meta charset="UTF-8">
<title>Add Admin </title>
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
    <button class="btn btn-primary btn-user" name="signUp">Create A New Admin
    </button>

  </div>
</form>
</body>
</html>
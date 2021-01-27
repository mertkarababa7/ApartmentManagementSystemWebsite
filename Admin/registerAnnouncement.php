<?php
include 'checklogin.php';
include 'registerAnnouncementFunction.php';
include '../db_conn.php';
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>


</style>
<meta charset="UTF-8">
<title>Create Announcement </title>
<link rel="stylesheet" href="Main.css">
  <link rel="stylesheet" href="admin.css"> 
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
</head>

<body>
  <div class="rlform">
  <div class="rlform rlform-wrapper">
   <div class="rlform-box">
  <div class="rlform-box-inner">
  <form  method="post" class=>


   
</form>
 <h2>Create Announcement</h2>
<form  method="post">

    <div class="rlform-group">    
    <label>Block</label>
 
<select name="Header">
    <option value="Dues">Dues</option>
     <option value="Rules">Rules</option>
      <option value="Other">Other</option>
   
         
</select>
 </div>
    <p>
        <label for="job"> Announcement Details</label>
        <input type="text" name="Details"  value="<?php echo $_POST['Details'] ?? ''; ?>">
    </p>
     <p>
         <div class="rlform-group">    
    <label>Block</label>
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
    </p>
           
   
  
       
          
    
   <div>
    <button class="btn btn-primary btn-user" name="signUp">Create Announcement
    </button>

  </div>
</form>
</body>
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</html>
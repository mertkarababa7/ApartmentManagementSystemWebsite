<?php
include 'checklogin.php';
include 'registerAnnouncementFunction.php';
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
<title>Create Announcement </title>
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
  <a href="admin.php" class="active">Return Home </a>
  <a href="registerStaff.php">Register Staff</a>
   <a href="search.php">Search</a>
</div>
<body>
 
  <form  method="post">

<a href="viewAnnouncement.php" class="button">View Announcements</a>
   
</form>
 <h2>Create Announcement</h2>
<form  method="post">

    <p>
        <label for="Staff">Announcement/Event Header</label>
        <input type="text" name="Header" value="<?php echo $_POST['Header'] ?? ''; ?>">
    </p>
    <p>
        <label for="job"> Details</label>
        <input type="text" name="Details"  value="<?php echo $_POST['Details'] ?? ''; ?>">
    </p>
     <p>
        <label for="job"> Block Name</label>
        <input type="text" name="Block" >
    </p>
           
    <label>Participation is Mandatory or Not</label>
    <select name="mandatory">
    <option value="mandatory">Choose</option>
     <option value="YES">YES</option>
    <option value="NO">NO</option>
   
  </select>
     
    <p>
       
    </p>
       <div class="rlform-group">         
    <label>Start Time (IF NECESSARY)</label>
    <select name="Time">
    <option value="Time">Event Time</option>
     <option value="10-12">10:00-12:00</option>
    <option value="12-14">12:00-14:00</option>
    <option value="14-16">14:00-16:00</option>
    <option value="16-18">16:00-18:00</option>
    <option value="18-20">18:00-20:00</option>
  </select>
     </div>
          
    
   <div>
    <button class="updatebutton" name="signUp">Create Announcement/Event
    </button>

  </div>
</form>
</body>
</html>
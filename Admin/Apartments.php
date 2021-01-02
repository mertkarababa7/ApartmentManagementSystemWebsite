<?php
include 'checklogin.php';
include 'registerApartment.php';
include '../db_conn.php';

?>

<!DOCTYPE html>
<html>

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


</style>
<head>
  <title>Add Apartment</title>

  <link rel="stylesheet" href="Main.css">
  <link rel="stylesheet" href="x.css">  
</head>
<div class="topnav">
  <a href="registerCustomer.php"  >Register Costumer</a>
  <a href="registerAdmin.php" >Return Home</a>
  <a href="logout.php">Admin LogOut </a>
  <a href="admin.php" class="active">Return Home</a>
  <a href="Tenants.php">Payments</a>
  <a href="Landlord.php">Costumers</a>
  <a href="expenses.php">Expenses</a>
  <a href="registerAnnouncement.php">Create Announcements </a>
  <a href="registerStaff.php">Register Staff</a>
  <a href="search.php" >Search</a>

</div>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title> View Flats</title>
<form  method="post">

  <a href="viewflats.php" class="button">View/Update/Delete Flats</a>

</form>

<body>
 <div class="rlform">
  <div class="rlform rlform-wrapper">
   <div class="rlform-box">
    <div class="rlform-box-inner">
     <form method="post" >
      <h2>Apartment Create Page</h2>

      <div class="rlform-group">
        <label>Block </label>
        <input type="text" name="Block"  class="rlform-input" >
      </div>

      <div class="rlform-group">         
        <label>Door Number </label>
        <input type="text" name="door_number"class="rlform-input" >
      </div>

      <div class="Floor">         
        <label>Floor</label>
        <input type="text" name="floor" class="rlform-input" >
      </div>

      <div class="rlform-group">         
        <label>Price</label>
        <input type="text" name="price" class="rlform-input" >
      </div>

      <div class="rlform-group">         
        <label>Fee</label>
        <input type="text" name="fee" class="rlform-input" >
      </div>

      </select>
    </div>


    <div>
      <button class="rlform-btn" name="signUp">Create Apartment
      </button>

    </div>
  </div>
</form>

</div>

</div>
</form>
</body>
</html>
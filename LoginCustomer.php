<?php 
session_start();

?>

<html>
<head>
<title>Customer Login</title>

<link rel="stylesheet" href="Main.css">
    
</head>
<div class="topnav">
<a href="index.php" class="active">Login As Admin</a>
 <a href="LoginCustomer.php" class="active">Login As Customer</a>
  
  
  
 
</div>
<body>
  <header>    
    <div id="login-box">
       <div class="one-box">
          <h2> Customer Login</h2>
              <form action="Customer/LoginCustomerFunction.php" method="post">
                             <div class="input-group">
<?php  if (isset($_GET['error'])) {  ?>
        <p class="error"><?php  echo   $_GET['error'] ; ?>  <?php } ?>
        <h3>Username<br><br>
        <span class="input-group-addon" id="basic-addon3"></span>
               <input type="text" class="form-control" name="cname" value="<?php echo $_POST['cname'] ?? ''; ?>" />
               <br> 
               <br>Password<br><br>
          <span class="input-group-addon" id="basic-addon3"></span>

               <input type="password" class="form-control" id="password" name="password"  "/>
               <br>
               </h3>
      <input type="Submit" value="Login" class="btn btn-default btn-sm">
      
            </div>
        </div>
    </div>
  </header>
</body>

</html>

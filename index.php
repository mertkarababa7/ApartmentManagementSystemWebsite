<?php 
session_start();

if (!isset($_SESSION['id'])) {

 ?>

<html>
<head>
<title>Sign In</title>

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
<body>
	<header>		
		<div id="login-box">
		   <div class="one-box">
		      <h2> Login</h2>
		          <form action="login.php" method="post">
                             <div class="input-group">
<?php  if (isset($_GET['error'])) {  ?>
     		<p class="error"><?php  echo   $_GET['error'] ; ?>	<?php } ?>
				<h3>Username<br><br>
				<span class="input-group-addon" id="basic-addon3"></span>
			         <input type="text" class="form-control" name="uname" value="<?php echo $_POST['uname'] ?? ''; ?>" />
			         <br> 
			         <br>Password<br><br>
				  <span class="input-group-addon" id="basic-addon3"></span>

			         <input type="password" class="form-control" id="password" name="password" 	"/>
			         <br>
			         </h3>
			<input type="Submit" value="Login" class="btn btn-default btn-sm">
			
			      </div>
		    </div>
		</div>
	</header>
</body>

</html>
<?php 
}else{
     header("Location: admin.php");
     exit();
}
 ?>
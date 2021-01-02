<?php 
session_start();

if (!isset($_SESSION['id'])) {

 ?>

<html>
<head>
<title>Admin Login</title>

<link rel="stylesheet" href="Main.css">
    
</head>
<div class="topnav">
<a href="index.php" class="active">Login As Admin</a>
 <a href="LoginCustomer.php" class="active">Login As Customer</a>
  <a href="logout.php">Admin LogOut </a>
  
  
 
</div>
<body>
	<header>		
		<div id="login-box">
		   <div class="one-box">
		      <h2> Admin Login</h2>
		          <form action="admin/login.php" method="post">
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
     header("Location: Admin/admin.php");
     exit();
}
 ?>
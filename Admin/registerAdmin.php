<?php
include 'checklogin.php';
include 'registerFunctionAdmin.php';
include '../db_conn.php';
include 'navbar.php';
?>


<!DOCTYPE html>
<html>


<style>
  @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);


body{
    margin: 0;
    font-size: .9rem;
    font-weight: 400;
    line-height: 1.6;
    color: #212529;
    text-align: left;
    background-color: #f5f8fa;
}

.navbar-laravel
{
    box-shadow: 0 2px 4px rgba(0,0,0,.04);
}

.navbar-brand , .nav-link, .my-form, .login-form
{
    font-family: Raleway, sans-serif;
}

.my-form
{
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
}

.my-form .row
{
    margin-left: 0;
    margin-right: 0;
}

.login-form
{
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
}

.login-form .row
{
    margin-left: 0;
    margin-right: 0;
}

</style>
<head>
<title>Create Admin</title>

 
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
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register Admin</div>
                        <div class="card-body">
  <form name="my-form" method="post">
                          

                                <div class="form-group row">
    <label class="col-md-4 col-form-label text-md-right" >Username</label>
     <div class="col-md-6">
    <input type="text" name="user_name" value="<?php echo $_POST['user_name'] ?? ''; ?>"class="form-control">
   </div></div>
    <div class="form-group row">
    <label class="col-md-4 col-form-label text-md-right">Full Name</label>
      <div class="col-md-6">
    <input type="text" name="name" value="<?php echo $_POST['name '] ?? ''; ?>" class="form-control" >
   </div>
</div>
<div class="form-group row">
    <label class="col-md-4 col-form-label text-md-right">Password</label>
      <div class="col-md-6">         
    <input type="password" name="password" value="<?php echo $_POST['password '] ?? ''; ?>" class="form-control" >
  
  </div></div>
   
<div class="form-group row">
    <label class="col-md-4 col-form-label text-md-right">Phone Number</label>
      <div class="col-md-6">         
   
    <input type="number" step="1" pattern="\d+" name="phoneNumber" value="<?php echo $_POST['phoneNumber'] ?? ''; ?>" id="phone_number" class="form-control" >
  </div>
     </div>


<div class="form-group row">
    <label class="col-md-4 col-form-label text-md-right">E-mail</label>
      <div class="col-md-6">          
    <input type="email" name="email" id="email" value="<?php echo $_POST['email'] ?? ''; ?>" class="form-control" >
     </div>
</div>
     
<div>
   <div class="col-md-6 offset-md-4">
    <button class="btn btn-primary btn-user" name="signUp">Create Admin
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
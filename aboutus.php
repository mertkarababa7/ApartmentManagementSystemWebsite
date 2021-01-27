 <?php 

include 'sendmessage.php';
include 'navbar.php';
include 'db_conn.php';
?>


<style>
    p {
 text-align: center;
line-height: 100px;


}

  .bg-password-image2 {
   background: url("https://images.unsplash.com/photo-1515263487990-61b07816b324?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80");
  background-position: center;  
  background-size: cover;
}
</style>
<link rel="stylesheet" href="admin.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="custom.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,500,600" rel="stylesheet" type="text/css">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact Us</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<H1><p style="color:black">Registered On Our Website </P>
<div class="main-section">
    <div class="dashbord dashbord-skyblue">
      <div class="icon-section">
        <i class="fa fa-users" aria-hidden="true"></i><br>
        <large>Total Customers</large>
        <p><?php
 $query = "SELECT COUNT(*) FROM customer ";   
$result = mysqli_query($conn,$query) or die(mysql_error());
while($row = mysqli_fetch_array($result)){
  echo "  <tbody><tr class='active-row'>
<td>".$row[0]."</td></tr>";}
 ?> </p>
      </div>
     
    
    </div>
    <div class="dashbord dashbord-green">
      <div class="icon-section">
        <i class="fa fa-building" aria-hidden="true"></i><br>
        <large>Total Flats</large>
        <p><?php
 $query = "SELECT COUNT(*) FROM flats ";   
$result = mysqli_query($conn,$query) or die(mysql_error());
while($row = mysqli_fetch_array($result)){
  echo "  <tbody><tr class='active-row'>
<td>".$row[0]."</td></tr>";}
 ?> </p>
      </div>
      
     
    </div>
  

  <div class="dashbord dashbord-red">
      <div class="icon-section">
        <i class="fa fa-building" aria-hidden="true"></i><br>
        <large>Total Apartment</large>
        <p><?php
 $query = "SELECT COUNT(*) FROM apartment ";   
$result = mysqli_query($conn,$query) or die(mysql_error());
while($row = mysqli_fetch_array($result)){
  echo "  <tbody><tr class='active-row'>
<td>".$row[0]."</td></tr>";}
 ?> </p>
      </div>
      
     
    </div>
  
   
 
  </div>
  </H1>

      
         <h3> <p style="color:black"> <b>Contact With Us From : 054443123 </p> </b></h3>             

 

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

 <script>
  function checkdelete()
  {
    return confirm('Are you sure you want to send this message')
  }


</script>
</html>

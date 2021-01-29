<?php 

include '../db_conn.php';
include 'CheckLogin.php';
include 'navbar.php';
 ?>

 <style>
  #updatebutton
  {
    background-color:#4e73df;
    color:white;
    width:%100;
    height:%100;
    font-size:15px;
  }
  #dltbutton
  {
    background-color:#f7786b;
    color:white;
    width:%100;
    height:%100;
    font-size:15px;
  }

 </style>

<!DOCTYPE html>
<html>
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
   <link rel="stylesheet" href="adminMainPage.css">

<head>


  <title> Announcements</title>




</head>
<body>
<script>
     $(document).ready(function(){
       $("#Input").on("keyup", function() {
         var value = $(this).val().toLowerCase();
         $("#Table tr").filter(function() {
           $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
         });
       });
     });

  </script>

<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h5 class="m-0 font-weight-bold text-primary">Customers</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">


    <thead>
  <tr "active-row" class="centerText">
      <th class="centerText">Customer Full Name</th>
          <th>Header</th>
       <th class="centerText">Message</th>
    <th >Block</th>

   
    <th>Received Date</th>
     
   
     
     
   
   
  </tr>
   </thead>

 <?php 
  $admin_id=$_SESSION['id'];
    $query = "SELECT * FROM messages,customer where messages.admin_id='$admin_id' and messages.customer_id=customer.customer_id ORDER BY id desc";

    $data = mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    if($total!=0)
    {
while($result = mysqli_fetch_assoc($data)){   //Creates a loop to loop through results
 if ($result['head']=='Complaint' || $result['head']=='Request'){
  echo "  <tbody><tr class='table-danger'>
  <td >".$result['name']." ".$result['surname']."</td>
    <td class='centerText'>".$result['head']."</td>
<td class='centerText'>".$result['message']."</td>
  <td class='centerText'> ".$result['Block']."</td>

  <td class='centerText'>".$result['messagedate']."</td>
 
  
  </tr>";

}
else{
   echo "  <tbody><tr class='table'>
 <td>".$result['name']." ".$result['surname']."</td>
   <td class='centerText'>".$result['head']."</td>
<td class='centerText'>".$result['message']."</td>
  <td class='centerText'>".$result['Block']."</td>
  <td class='centerText'>".$result['messagedate']."</td>

 

 
  </tr>";
}
}}
?>
  
</table>
</div>

</div>
<script>
  function checkdelete()
  {
    return confirm('Are you sure you want to Close This Flat')
  }

</script>

<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h5 class="m-0 font-weight-bold text-primary">Non-Customers</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">


    <thead>
  <tr "active-row" class="centerText">
      <th class="centerText">Sender E-mail</th>
    <th >Message</th>
    <th>Recieved Date</th>
     
   
     
     
   
   
  </tr>
   </thead>

 <?php 
  $admin_id=$_SESSION['id'];
  $null=NULL;
    $query = "SELECT * FROM messages where admin_id='89' and customer_id='0' ORDER BY id desc";

    $data = mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    if($total!=0)
    {
while($result = mysqli_fetch_assoc($data)){   //Creates a loop to loop through results
 
  echo "  <tbody><tr class='table-primary'>

<td class='centerText'>".$result['sender']."</td>
<td class='centerText'>".$result['message']."</td>
  <td class='centerText'>".$result['messagedate']."</td>
 
  
  </tr>";

}
}
else{
   echo " no messages  ";
}


?>
  
</table>


</div>


</body>


</html>
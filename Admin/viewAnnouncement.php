<?php 

include '../db_conn.php';
include 'checkLogin.php';
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
<style>
body {
 background-image: url("homepage.jpg");
 background-color: #cccccc;
   background-repeat: no-repeat;
   background-size: cover;
 
}  

  .reee {
      padding-left: 350px;
      padding-right: 100px;
      padding-top : 50px;
  }
 

</style>



<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="Admin.css">
  
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
                            <h4 class="m-0 font-weight-bold text-primary">Announcements</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">


    <thead>
  <tr "active-row">
    <th>Block</th>
    <th>Header</th>
    <th>Details</th>
    <th>Opened Date</th>
     <th>Delete</th>
   
     
   
   
   
  </tr>
   </thead>

 <?php 

    $query = "SELECT * FROM announcement ORDER BY head ";

    $data = mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    if($total!=0)
    {
while($result = mysqli_fetch_assoc($data)){   //Creates a loop to loop through results
 if ($result['head']=='Dues' || $result['head']=='Rules'){
  echo "  <tbody><tr class='table-danger'>
  <td>".$result['Block']."</td>
  <td>".$result['head']."</td>
<td>".$result['details']."</td>
  <td>".$result['openedDate']."</td>

 
  
  <td><a href='deleteannouncement.php?ci=$result[id]'onclick='return checkdelete()' ><input type='submit' value='Delete' id='dltbutton' ></a> </td> 

  
  </tr>";

}
else{
   echo "  <tbody><tr class='table-success'>
  <td>".$result['Block']."</td>
  <td>".$result['head']."</td>
<td>".$result['details']."</td>
  <td>".$result['openedDate']."</td>


 
  <td><a href='deleteannouncement.php?ci=$result[id]'onclick='return checkdelete()' ><input type='submit' value='Delete' id='dltbutton' ></a> </td> 
 
  </tr>";
}
}}
?>
  
</table>


</div>
<script>
  function checkdelete()
  {
    return confirm('Are you sure you want to Close This Flat')
  }

</script>

</body>


</html>
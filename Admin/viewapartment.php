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
 

<head>


  <title> Apartments</title>
<style>
body {
 background-image: url("homepage.jpg");
 background-color: #cccccc;
   background-repeat: no-repeat;
   background-size: cover;
 
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
                            <h4 class="m-0 font-weight-bold text-primary">Apartments</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">


    <thead>
  <tr "active-row">
    <th>Block</th>
    <th>Address</th>
    <th>Total Flat number</th>
   
   
     
     
   
   
  </tr>
   </thead>

 <?php 
$query1 = "SELECT count(door_number) FROM flats,apartment  where apartment.apartment_id=flats.Apart_id and flats.Block='A' ";
 $result= mysqli_query($conn, $query1);
   $row =$result->fetch_assoc();
   $totalA=$row['count(door_number)'];
   


   $totalC=0;
$query2 = "SELECT count(door_number) FROM flats,apartment  where apartment.apartment_id=flats.Apart_id and flats.Block='B' ";
 $result2= mysqli_query($conn, $query2);
   $row =$result2->fetch_assoc();
   $totalB=$row['count(door_number)'];

    $query = "SELECT * FROM apartment ";

    $data = mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    if($total!=0)
    {
while($result = mysqli_fetch_assoc($data)){   //Creates a loop to loop through results
if ($result['Block']=='A'){
  echo "  <tbody><tr class='active-row'>
  <td>".$result['Block']."</td>
<td>".$result['Adress']."</td>
  <td>".$totalA."</td>
  </tr>";
 }
 elseif ($result['Block']=='B'){
  echo "  <tbody><tr class='active-row'>
  <td>".$result['Block']."</td>
<td>".$result['Adress']."</td>
  <td>".$totalB."</td>
  </tr>";
 } else {
 echo "  <tbody><tr class='active-row'>
  <td>".$result['Block']."</td>
<td>".$result['Adress']."</td>
  <td>".$totalC."</td>
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
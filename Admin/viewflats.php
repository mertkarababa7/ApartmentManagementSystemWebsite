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


  <title> Flats</title>




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
                            <h4 class="m-0 font-weight-bold text-primary">Flats</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">


    <thead>
  <tr "active-row">
    <th>Block</th>
    <th>Door Number</th>
    <th>Floor</th>
       <th>Full</th>
    <th>Update</th>
     <th>Delete</th>
   
     
     
   
   
  </tr>
   </thead>

 <?php 

    $query = "SELECT * FROM flats ORDER BY flat_id ";

    $data = mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    if($total!=0)
    {
while($result = mysqli_fetch_assoc($data)){   //Creates a loop to loop through results
 if ($result['Block']=='B'){
  echo "  <tbody><tr class='active-row'>
  <td>".$result['Block']."</td>
<td>".$result['door_number']."</td>
  <td>".$result['floor']."</td>
  <td>".$result['isfull']."</td>
 
  <td><a href='editflat.php?ci=$result[flat_id] & bo=$result[Block] &fl=$result[floor] &dr=$result[door_number] '><input type='submit' value='update' class='btn btn-primary' ></a></td>
  <td><a href='deleteflat.php?ci=$result[flat_id]'onclick='return checkdelete()' ><input type='submit' value='Delete' class='btn btn-danger' ></a> </td>
  
  </tr>";

}
else{
 echo "  <tbody><tr class='table-Active'>
  <td>".$result['Block']."</td>
 <td>".$result['door_number']."</td>
  <td>".$result['floor']."</td>
<td>".$result['isfull']."</td>
 
  <td><a href='editflat.php?ci=$result[flat_id] & bo=$result[Block] &fl=$result[floor] &dr=$result[door_number] '><input type='submit' value='update' class='btn btn-primary' ></a></td>
  <td><a href='deleteflat.php?ci=$result[flat_id]'onclick='return checkdelete()' ><input type='submit' value='Delete' class='btn btn-danger' ></a> </td>
 
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
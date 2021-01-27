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


	<title>All Dues</title>
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
                            <h4 class="m-0 font-weight-bold text-primary">All Dues</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">


    <thead>
  <tr "active-row">
    <th>Due Details</th>
    <th>Due Block</th>
    <th>Opened Date</th>
    <th>Closed Date</th>
     <th>Collected Money</th>
      <th>Outgoings</th>
 <th>Expected Money</th>
    <th>Is Due Active</th>
   <th>Close The Due</th>
     
   
   
  </tr>
   </thead>

 
    <?php 

$query = "SELECT * FROM dues ORDER BY date DESC; ";
//TO see better with ascending door numbers
$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
 echo "<input class=Search id=Input type=text placeholder=Search..> <br>";
   if($total!=0)

   {
while($result = mysqli_fetch_assoc($data)){   //Creates a loop to loop through results
if($result["isactive"] == 1)
       {
echo "  <tbody id=Table><tr class='active-row'>
<td>".$result['details']."</td>
<td>".$result['Block']."</td>
<td>".$result['date']."</td>
<td>".$result['closeDate']."</td>
<td>".$result['CollectedMoney']."</td>
<td>".$result['SpentMoney']."</td>
<td>".$result['ExpectedMoney']."</td>
<td>".$result['isactive']."</td>
<td><a href='closedue.php?ci=$result[id]'onclick='return checkdelete()' ><input type='submit' value='Close' id='dltbutton' ></a> </td>

</tr></tbody>";
}
else {


echo "  <tbody id=Table><tr class='table-danger'>
<td>".$result['details']."</td>
<td>".$result['Block']."</td>
<td>".$result['date']."</td>
<td>".$result['closeDate']."</td>
<td>".$result['CollectedMoney']."</td>
<td>".$result['SpentMoney']."</td>
<td>".$result['ExpectedMoney']."</td>
<td>".$result['isactive']."</td>
<td><a href='opendue.php?ci=$result[id]'onclick='return checkdelete1()' ><input type='submit' value='Open' id='updatebutton' ></a> </td>

</tr></tbody>";
}
}
}

?>
  
</table>
</div>
<script>
  function checkdelete()
  {
    return confirm('Are you sure you want to Close This Due')
  }
   function checkmoveout()
  {
    return confirm('Are you sure you want to Move Out this Customer')
  }
  function checkdelete1()
  {
    return confirm('Are you sure you want to Open This Due Again')
  }
</script>

</body>


</html>
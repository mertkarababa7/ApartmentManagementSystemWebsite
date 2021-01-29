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
  .textCenter{
       text-align: center;}
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


	<title> Customers</title>
<style>
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
                            <h4 class="m-0 font-weight-bold text-primary">Table For Customers</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">


    <thead>
  <tr "active-row" class="textCenter">
    <th>Full Name</th>
    <th>Move In Date</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Door Number</th>
     
      <th colspan="2" align="center">Database Operations</th>
       <th>Move Out</th>
  </tr>
   </thead>

 
    <?php 

$query = "SELECT * FROM customer order by Active Desc; ";
//TO see better with ascending door numbers
$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
 echo "<input class=Search id=Input type=text placeholder=Search..> <br>";
   if($total!=0)

   {
while($result = mysqli_fetch_assoc($data)){   //Creates a loop to loop through results
if ($result['Active']=='1')
{
echo "  <tbody id=Table><tr class='active-row'>
<td >".$result['name']." ".$result['surname']."</td>

<td class='textCenter'>".$result['date']."</td>
<td class='textCenter'>".$result['email']."</td>
<td class='textCenter'>".$result['phone_number']."</td>
<td class='textCenter'>".$result['Block']."->".$result['door_number']."</td>

<td><a href='edit.php?ci=$result[customer_id] & na=$result[name] &su=$result[surname] & em=$result[email] &dn=$result[door_number]& pn=$result[phone_number]' ><input type='submit' value='update' id='updatebutton' ></a></td>
<td><a href='delete.php?ci=$result[customer_id]'onclick='return checkdelete()' ><input type='submit' value='Delete' id='dltbutton' ></a> </td>
<td><a href='moveout.php?ci=$result[customer_id]'onclick='return checkmoveout()' ><input type='submit' value='Move Out' id='dltbutton' ></a> </td>
</tr></tbody>";
}

else{
echo "  <tbody id=Table><tr class='table-danger'>
<td >".$result['name']." ".$result['surname']."</td>
<td class='textCenter'>".$result['date']."</td>
<td class='textCenter'>".$result['email']."</td>
<td class='textCenter'>".$result['phone_number']."</td>
<td class='textCenter'>".$result['Block']."->".$result['door_number']."</td>

<td><a href='edit.php?ci=$result[customer_id] & na=$result[name] &su=$result[surname] & em=$result[email] &dn=$result[door_number]& pn=$result[phone_number]' ><input type='submit' value='update' id='updatebutton' ></a></td>
<td><a href='delete.php?ci=$result[customer_id]'onclick='return checkdelete()' ><input type='submit' value='Delete' id='dltbutton' ></a> </td>
<td class='textCenter'>".$result['OutDate']."</td>
</tr></tbody>";
}
}
}
?>
  
  <tfoot>
  <tr "active-row" class="textCenter">
    <th>Full Name</th>
    <th>Move In Date</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Door Number</th>
     
      <th colspan="2" align="center">Database Operations</th>
       <th>Move Out</th>
  </tr>
   </tfoot>
</table>
</div>
<script>
  function checkdelete()
  {
    return confirm('Are you sure you want to delete this Customer')
  }
   function checkmoveout()
  {
    return confirm('Are you sure you want to Move Out this Customer')
  }
</script>

</body>


</html>
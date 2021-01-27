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


	<title> Customer Payments</title>
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
                            <h4 class="m-0 font-weight-bold text-primary">Customers Payment List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">


    <thead>
  <tr "active-row">
    <th>Name</th>
    <th>Surname</th>
    <th>Paid Date</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Block</th>
   
     
    
     
  </tr>
   </thead>

 <?php 

    $sql1 = "SELECT * FROM customer";
 $result= mysqli_query($conn, $sql1);
   $row =$result->fetch_assoc();
   $name=$row['name'];
    $surname=$row['surname'];
   


         $query = "SELECT * FROM depts,customer  where   depts.customer_id=customer.customer_id ORDER BY  ispaid DESC";
$once = false;

$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

 echo "<input class=Search id=Input type=text placeholder=Search..> <br>";
   if($total!=0)

   {
while($result = mysqli_fetch_assoc($data)){   //Creates a loop to loop through results
 if($result["ispaid"] == '1')
       {
echo "  <tbody id=Table><tr class='active-row'>
<td>".$result['name']."</td>
<td>".$result['surname']."</td>
<td>".$result['PaymentDate']."</td>
<td>".$result['amount']."</td>
<td>".$result['details']."</td>
<td>".$result['Block']."</td>
</tr></tbody>";
  }
       else {

        echo "  <tbody id=Table><tr class='table-danger'>
<td>".$result['name']."</td>
<td>".$result['surname']."</td>
<td>".$result['PaymentDate']."</td>
<td>".$result['amount']."</td>
<td>".$result['details']."</td>
<td>".$result['Block']."</td>

</tr></tbody>";

}
}
 echo "</tbody></table></div></div>";}

?>
  
</table>
  
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
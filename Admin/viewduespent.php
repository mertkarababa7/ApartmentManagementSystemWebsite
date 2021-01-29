
<?php 
include 'checklogin.php';
include '../db_conn.php';
include 'navbar.php';

?>

<!DOCTYPE html>
<html>
<head>

<title> Payment List </title>
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

  

</head>
<body>

           


           
         
   <div class="card shadow mb-4">
                        <div class="card-header py-3">

                            <h4 class="m-0 font-weight-bold text-primary">Table For Outgoings</h4>

                            </div>
           <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">




    <thead>
  <tr "active-row">
    <th class='centerText'>Spent Money </th>
    <th class='centerText'>Details </th>
  <th class='centerText'>Spent Date </th>
    

     

  </tr>
   </thead>

 
    <?php 

    $sql1 = "SELECT * FROM customer";
 $result= mysqli_query($conn, $sql1);
   $row =$result->fetch_assoc();



    $ci=$_GET['ci'];
   


         $query = "SELECT * FROM duespent where due_id='$ci'  ";
$once = false;

$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

 echo "<input class=Search id=Input type=text placeholder=Search..> <br>";
   if($total!=0)

   {
while($result = mysqli_fetch_assoc($data)){   //Creates a loop to loop through results
 
echo "  <tbody id=Table><tr class='table-danger'>
<td class='centerText'>".$result['amount']."</td>
<td class='centerText'>".$result['details']."</td>
<td class='centerText'>".$result['SpentDate']."</td>
</tr></tbody>";
  
      
      }
}

?>
  
</table>
        </div>


        </div>
          
                      

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
                        






</body>




</html>





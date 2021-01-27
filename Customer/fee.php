  <?php 
  include 'checkCustomerLogin.php';
  include '../db_conn.php';
  include 'navbar.php';
  ?>


  <!DOCTYPE html>
  <html>
  <head>
  	<title> Fee </title>
    <style>
       

  #updatebutton

  {
    background-color:#4e73df;
    color:white;
    width:%100;
    height:%100;
    font-size:15px;
  }



   </style>

<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

   <link rel="stylesheet" href="main.css">
   <link rel="stylesheet" href="customer.css">

  
</head>
<body>


  <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">Active Dues</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

    <tr class="active-row">
      <th>Due Amount</th>
      <th>Due Details</th>
      <th>Due Opened Date</th>
      <th>Due Block</th>
      <th>Payment</th>
      
    </tr>
  <?php 
    $tid=$_SESSION['customer_id'];
$block=$_SESSION['Block'];
$ödeme=0;
$query = "SELECT * FROM depts where customer_id='$tid' and ispaid='$ödeme' ORder by OpenedDate DESC";
$result = $conn->query($query);

$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
   if($total>0)
   {
while($result = mysqli_fetch_assoc($data)){   
echo "  <tbody><tr class='table-danger'>
<td>".$result['amount']."</td>
<td>".$result['details']."</td>
<td>".$result['OpenedDate']."</td>
<td>".$result['Block']."</td>

 <td> <a href='paymentfee.php?kid=$result[payment_id]' >
        <input type='submit' value='Pay' id='updatebutton' ></a> </td>


       
</tr>";

}
}
else{
  echo "You Have No Depts";
}
?>
    
</div>

 </table>
</div></div></div>
   <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h5 class="m-0 font-weight-bold text-primary">Payment History</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <tr class="active-row">
      <th>Paid Amount</th>
      <th>Details</th>
      <th>Due Opened Date</th>
       <th>Due Paid Date</th>
      <th colspan="2">Costumer Full name</th>
    </tr>
  </thead>
  <tbody>
   <?php 

   include '../db_conn.php';
      $name=$_SESSION['name'];
$surname=$_SESSION['surname'];
   $ödendi=1;
   $sql = "SELECT* from depts WHERE customer_id='$tid' and ispaid='$ödendi'  ORder by OpenedDate desc ";
   if ($result = $conn->query($sql)) {


    while ($row = $result->fetch_assoc()) {

      ?>
      <tbody><tr class='table-success'> 
<td><?php echo $row['amount']?></td>
        <td><?php echo $row['details']?></td>
        <td><?php echo $row['OpenedDate']?></td>
        <td><?php echo $row['PaymentDate']?></td>
        <td><?php echo $name?></td>
         <td><?php echo $surname?></td>
      </tr> 
      <?php  


    }

    $result->close();
  }



  ?>   



</table>
</body>
</html>
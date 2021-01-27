<?php 
include 'checkCustomerLogin.php';
include '../db_conn.php';

?>


<!DOCTYPE html>
<html>
<head>
  <title> Expenses </title>
  <style>
    body {

     background-color: #cccccc;
     background-repeat: no-repeat;
     background-size: cover;

   }   
  
 #updatebutton {
  border: none;
  color: black;
  padding: 12px 45px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  cursor: pointer;
  background-color: #4CAF50
}
 </style>



 <link rel="stylesheet" href="main.css">
 <link rel="stylesheet" href="customer.css">

 <div class="topnav">
    <a href="LoggedCustomer.php" >Home Page</a>
<a href="borc.php">Pay Rent</a>
<a href="fee.php" >Pay Fee</a>
<a href="expenses.php"class="active" >Expenses</a>
<a href="logoutCustomer.php">Costumer Log Out </a>
  <a href="Announcement.php" >Announcements </a>
   <a href="staff.php">Staff </a>

</div>
</head>
<body>
  <h1 style="color: #fff;background: #4CAF50;padding: 15px;border-radius: 10px">Expenses</h1><br><br>

  
    


  

   <table class="styled-table" border="2" cellspacing="7">
   
  <tr "active-row">
    
 

    <th>expense</th>
    <th>spent</th>
     <th> Block</th>
     <th>Details</th>
     <th> Date</th>
     <th>Pay</th>
     <th> Details</th>
  </tr>


    <?php 
    $tid=$_SESSION['customer_id'];
$block=$_SESSION['Block'];
$query = "SELECT * FROM expenses where Block='$block'";
$result = $conn->query($query);

$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
   if($total>0)
   {
while($result = mysqli_fetch_assoc($data)){   

echo "  <tbody><tr class='active-row'>
<td>".$result['expense']."</td>
<td>".$result['spent']."</td>
<td>".$result['Block']."</td>
<td>".$result['Details']."</td>
<td>".$result['date']."</td>
 <td> <a href='paymentExpensee.php?id=$result[id]' >
        <div class='button'>
        <input type='hidden' name='tid' value='<?php echo  $tid;?>' />
        <button style='margin:0px' class='btn btn-success pull-right 'type='submit'>Pay Rent Page </button>
        </div>

        <td><a href='viewexpense.php?id=$result[id]' ><input type='submit' value='Check Details' id='updatebutton' ></a> </td>
</tr>";

}
}
else{
  echo "no records";
}
?>
  
</table>

    


</div>
<div  class="col-sm-3 box" style="background-color:#4CAF50; margin-left:10px;">
 <h3><b>Previous payments</b>
   <table class="styled-table" border="2" cellspacing="7">

    <tr class="active-row">
      <th>Payment ID</th>
      <th>Date</th>
      <th>Amount</th>
      <th>Details</th>
      <th>Expenses Creator</th>
      <th colspan="2">Costumer Full name</th>
    </tr>
  </thead>
  <tbody>
   <?php 
   include '../db_conn.php';
     $tid=$_SESSION['customer_id'];
   $sql = "select * from transactionExpenses where customer_id=$tid ORDER BY date DESC";
   if ($result = $conn->query($sql)) {


    while ($row = $result->fetch_assoc()) {

      ?>
      <tr>

        <td><?php echo $row['id']?></td>
        <td><?php echo $row['date']?></td>
        <td><?php echo $row['amount']?></td>
        <td><?php echo $row['details']?></td>
        <td><?php echo $row['user_name']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['surname']?></td>
      </tr> 
      <?php  


    }

 
    $result->close();
  }



  ?>   



</table>


</body>
</html>
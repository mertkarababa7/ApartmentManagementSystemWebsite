  <?php 
  include 'checkCustomerLogin.php';
  include '../db_conn.php';

  ?>


  <!DOCTYPE html>
  <html>
  <head>
  	<title> Rent</title>
    <style>
      body {

       background-color: #cccccc;
       background-repeat: no-repeat;
       background-size: cover;

     }   

   </style>



   <link rel="stylesheet" href="main.css">
   <link rel="stylesheet" href="customer.css">

   <div class="topnav">
    <a href="LoggedCustomer.php">Home Page</a>
    <a href="borc.php"class="active">Pay Rent</a>
    <a href="fee.php" >Pay Fee</a>
    <a href="expenses.php" >Expenses</a>
    <a href="logoutCustomer.php">Costumer Log Out </a>
    <a href="Announcement.php" >Announcements </a>
     <a href="staff.php" >Staff </a>
  </div>
</head>
<body>
  <h1 style="color: #fff;background: #4CAF50;padding: 15px;border-radius: 10px">Rent</h1><br><br>

  <table class="styled-table" border="2" cellspacing="7">

    <tr class="active-row">
      <th>Name</th>
      <th>Surname</th>
      <th>Rent</th>
      <th>Email</th>
      <th>Door Number</th>
      <th>Deposit</th>
      <th>Your Apartment</th>
      <th>Payment Button</th>
    </tr>

    <?php 
    include '../db_conn.php';
    $tid=$_SESSION['customer_id'];

    $sql = "select *,(select price from flats where door_number=t.door_number)as price,(select Block from flats where door_number=t.door_number)as Block from customer t where customer_id=$tid";

    $run= mysqli_query($conn, $sql);{

      while ($row = $run->fetch_assoc()) {


 
        echo "  <tbody><tr class='active-row'>
        <td>".$row['name']."</td>
        <td>".$row['surname']."</td>
        <td>".$row['price']."</td>
        <td>".$row['email']."</td>
        <td>".$row['door_number']."</td>
        <td>".$row['deposit']."</td>
        <td>".$row['Block']."</td>
        <td> <a href='paymentRent.php' >
        <div class='button'>
        <input type='hidden' name='tid' value='<?php echo  $tid;?>' />
        <button style='margin:0px' class='btn btn-success pull-right 'type='submit'>Pay Rent Page </button>
        </div>

        </form></td>
        </tr>"
        ;
        ?>
      </table>

    </div>
  </div>

  <?php
}}
?>
</div>
<div  class="col-sm-3 box" style="background-color:#4CAF50; margin-left:10px;">
 <h3><b>Previous payments</b>
   <table class="styled-table" border="2" cellspacing="7">

    <tr class="active-row">
      <th>Payment ID</th>
      <th>Date</th>
      <th>Amount</th>
      <th colspan="2">Costumer Full name</th>
      <th colspan="2">Credit Cart Informations</th>
    </tr>
  </thead>
  <tbody>
   <?php 
   include '../db_conn.php';
   $sql1=" select *from creditcart where customer_id=$tid";
   $result=$conn->query($sql1);
   $row = $result->fetch_assoc();
   $card=$row['cardnumber'];
   $cardname=$row['name'];
   $sql = "select * from transaction  where customer_id=$tid ";
   if ($result = $conn->query($sql)) {


    while ($row = $result->fetch_assoc()) {

      ?>
      <tr>

        <td><?php echo $row['id']?></td>
        <td><?php echo $row['date']?></td>
        <td><?php echo $row['amount']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['surname']?></td>
        <td><?php echo $cardname?></td>
        <td><?php echo $card?></td>
      </tr> 
      <?php  


    }

    /* free result set */
    $result->close();
  }



  ?>   



</table>
</body>
</html>
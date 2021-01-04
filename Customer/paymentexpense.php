<?php

include 'CheckCustomerLogin.php';
include '../db_conn.php';
$tid = $_SESSION['customer_id'];
$block=$_SESSION['Block'];
$id=$_GET['id'];
if(isset($_POST['tid'])){

 $sql1 = "SELECT * FROM expenses where Block='$block' and id=$id ";
 $result= mysqli_query($conn, $sql1);
   $row =$result->fetch_assoc();
   $expense=$row['expense'];
   $details=$row['Details'];
   $Block=$row['Block'];
   $expenseid=$id;
 

$sql2="SELECT * FROM customer where customer_id='$tid' ";
if($result= mysqli_query($conn, $sql2)){
   $row =$result->fetch_assoc();
   $name=$row['name'];
   $surname=$row['surname'];
   $user_name=$row['user_name'];

}
$sql3="SELECT count(*)as total from customer  where Block='$block'";
if($result= mysqli_query($conn, $sql3))
{
   $row =$result->fetch_assoc();
   $total=$row['total'];
}


$qry="INSERT into transactionexpenses (customer_id,date,amount,name,surname,details,user_name,Block,expid) values('$tid',CURDATE(), ($expense /  ".($total)."),'$name','$surname','$details','$user_name','$Block','$expenseid')";
$run=mysqli_query($conn,$qry);
if($run=TRUE){
    ?>
    <script>

        alert('Payment Successfull !!');
        window.open('expenses.php','_self');

    </script>
    <?php
}
}
?>

<?php

include 'CheckCustomerLogin.php';
include '../db_conn.php';
$tid = $_SESSION['customer_id'];
if(isset($_POST['tid'])){
    $sql = "select *,(select expense from expenses where Block=t.Block)as expense,(select id from expenses where Block=t.Block)as expenseid,(select details from expenses where Block=t.Block)as details,(select Block from flats where door_number=t.door_number)as Block,(select user_name from expenses where Block=t.Block)as user_name,(select date from expenses where Block=t.Block)as date,(SELECT count(*) from customer where Block=t.Block)as total from customer t where customer_id=$tid";
    if($result= mysqli_query($conn, $sql)){
        $row =$result->fetch_assoc();
        $expense=$row['expense'];
        $details=$row['details'];
        $Block=$row['Block'];
        $name=$row['name'];
        $surname=$row['surname'];
        $user_name=$row['user_name'];
        $Block=$row['Block'];
        $total=$row['total'];
        $expenseid=$row['expenseid'];
    }
   
    $qry="insert into transactionexpenses (customer_id,date,amount,name,surname,details,user_name,Block,expid) values('$tid',CURDATE(), ($expense /  ".($total)."),'$name','$surname','$details','$user_name','$Block','$expenseid')";
    $run=mysqli_query($conn,$qry);
    if($run=TRUE){
        ?>
        <script>

            alert('Payment Successfull !!');
            window.open('borc.php','_self');
            
        </script>
        <?php
    }
}
?>

<?php

include 'CheckCustomerLogin.php';
include '../db_conn.php';
$tid = $_SESSION['customer_id'];
if(isset($_POST['tid'])){
    $sql="select *,(select fee from flats where door_number=t.door_number)as fee,(select Block from flats where door_number=t.door_number)as Block from customer t where customer_id=$tid";
    if($result= mysqli_query($conn, $sql)){
        $row =$result->fetch_assoc();
        $fee=$row['fee'];
        $name=$row['name'];
        $surname=$row['surname'];
        $Block=$row['Block'];
    }
    
    $qry="insert into transactionFee (customer_id,date,amount,name,surname,Block) values('$tid',CURDATE(),'$fee','$name','$surname','$Block')";
    $run=mysqli_query($conn,$qry);
    if($run=TRUE){
        ?>
<script>

        alert('Payment Successfull !!');
        window.open('fee.php','_self');
        
        </script>
        <?php
}
}
?>

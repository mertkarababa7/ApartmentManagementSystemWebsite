<?php

include 'CheckCustomerLogin.php';
include '../db_conn.php';
$tid = $_SESSION['customer_id'];
if(isset($_POST['tid'])){
    $sql="select *,(select price from flats where door_number=t.door_number)as price,(select Block from flats where door_number=t.door_number)as Block ,(select door_number from flats where door_number=t.door_number)as door_number from customer t where customer_id=$tid";
    if($result= mysqli_query($conn, $sql)){
        $row =$result->fetch_assoc();
        $price=$row['price'];
        $name=$row['name'];
        $surname=$row['surname'];
        $Block=$row['Block'];
        $door=$row['door_number'];
    }
    
    $qry="insert into transaction (customer_id,date,amount,name,surname,Block,door_number) values('$tid',CURDATE(),'$price','$name','$surname','$Block','$door')";
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

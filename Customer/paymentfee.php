<?php

include 'CheckCustomerLogin.php';
include '../db_conn.php';
include 'navbar.php';
$tid = $_SESSION['customer_id'];
?>
<?php 

?>


<!DOCTYPE html>
<html>
<head>
    <title> Fee </title>
    <style>
   input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
  .bg-password-image2 {
  background: url("https://png.pngtree.com/png-vector/20200423/ourlarge/pngtree-realistic-virtual-credit-cards-png-image_2177524.jpg");
  background-position: center;  
  background-size: cover;

}
</style>
 <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

 

</head>
<body class="bg-gradient-primary">

 <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
               
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-password-image2">
</div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                              
                                <h1 class="h4 text-gray-900 mb-4">Pay With Credit Card</h1>
                                <br><br><br><br>
                            </div>

    <?php 
    include '../db_conn.php';
    $tid=$_SESSION['customer_id'];

    ?>
    
    <td> <form ='paymentfee.php' method='post'   class="user">
      <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
        <label for="User name"> Card Owner's Name</label>
        <input type="text" name="name" value="<?php echo $_POST['name'] ?? ''; ?>" id="firstName" class="form-control form-control-user">
    </div>
    
                                    <div class="col-sm-6 mb-3 mb-sm-0">
        <label for="name"> Card Number</label>
        <input type="text" name="number"  value="<?php echo $_POST['number'] ?? ''; ?>" class="form-control form-control-user">
    </div>

                                    <div class="col-sm-6 mb-3 mb-sm-0">
 
           <label>EXP Month</label>
            <select  name="month" >
              <option value="1">1</option>
                <option value="2">2</option>
                  <option value="3">3</option>
                    <option value="4">4</option>
                      <option value="5">5</option>
                        <option value="6">6</option>
                          <option value="7">7</option>
                            <option value="8">8</option>
                              <option value="9">9</option>
                               <option value="10">10</option>
                                <option value="11">11</option>
                          
                                 <option value="12">12</option>


            </select>
          </div>

                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                       <label>EXP Year</label>
             <select  name="year">

          

                   <option value="2021">2021</option>
              <option value="2022">2022</option>
                  <option value="2023">2023</option>
                      <option value="2024">2024</option>
                          <option value="2025">2025</option>
            </select>
          </div>
          
  <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
              <label for="password">CVV</label>
        <input type="text"  name="cv"  class="form-control form-control-user" "/>
</div></div>


</div>


       <div class='button'>

            <input type='hidden' name='tid' value='<?php echo  $tid;?>' />
            <button class='btn btn-primary btn-user btn-block 'type='submit'>PAY FEE</button>
        </div>

    </form>



</body>
 <script src="vendor/jquery/jquery.min.js"></script>
       <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

       <!-- Core plugin JavaScript-->
       <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

       <!-- Custom scripts for all pages-->
       <script src="js/sb-admin-2.min.js"></script>
</html>
<?php
$kid=$_GET['kid'];

if(isset($_POST['tid'])){
    if (empty($_POST['name']) || empty($_POST['number']) || empty($_POST['month'])|| empty($_POST['year'])|| empty($_POST['cv'])) {
echo "Please fill up all the required field.";

}
else{
     $name=$_POST['name'];
        $number=$_POST['number'];
           $date=($_POST['month'] . '/' . $_POST['year']); 
              $cv=$_POST['cv'];

$sql2 = "INSERT INTO creditcart (name,customer_id, cardnumber, date,cv) VALUES ('$name', '$tid', '$number','$date','$cv')";
if(mysqli_query($conn, $sql2)){
    echo "Records added successfully.";
} else{ 
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
  $ödeme=1;
    $qry="UPDATE depts SET ispaid='$ödeme' , PaymentDate=CURDATE() where  payment_id='$kid' and customer_id='$tid'  ";
    $run=mysqli_query($conn,$qry);
    if($run=TRUE){
      
      $qry1="SELECT *FROM  depts,dues  where depts.payment_id='$kid' and dues.id=depts.due_id";
      $result= mysqli_query($conn, $qry1);
   $row =$result->fetch_assoc();
   $amount=$row['amount'];
   $Did=$row['due_id'];

       $qry="UPDATE dues SET CollectedMoney= CollectedMoney +'$amount' where  id='$Did'";
    $run=mysqli_query($conn,$qry);
        ?>

        <script>

            alert('Payment Successfull !!');
            window.open('fee.php','_self');

        </script>
        <?php
    }
    

}
    
}

?>

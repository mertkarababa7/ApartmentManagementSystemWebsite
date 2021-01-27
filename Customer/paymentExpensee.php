<?php

include 'CheckCustomerLogin.php';
include '../db_conn.php';


?>
<?php 

?>


<!DOCTYPE html>
<html>
<head>
    <title> Fee </title>
    <style>
      body {

         background-color: #cccccc;
         background-repeat: no-repeat;
         background-size: cover;

     }   

body {
  margin: 0;
  background-color: transparent;
  padding-top: 6em;
  color: #fff;
  font-family: "Roboto", sans-serif;
}
html {
  background: gray;
}
h1,
h2,
h3,
h4 {
  font-family: "Abel", sans-serif;
}
.forms {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
form {
  position: relative;
  margin-left: auto;
  margin-right: auto;
  width: 80%;
  max-width: 450px;
  transition: all 1s ease;
  opacity: 1;
  background: rgba(0, 0, 0, 0.2);
  padding: 40px 25px;
  border-radius: 1em;
  border-top-left-radius: 0;
  box-shadow: 0px 0px 20px 15px rgba(255, 255, 255, 0.15);
}
form h3 {
  position: absolute;
  top: -35px;
  left: 0;
  height: 35px;
  background: #fff;
  color: #444;
  padding: 0 15px;
  text-transform: uppercase;
  font-weight: bold;
  font-size: 20px;
  line-height: 35px;
  --notchSize: 10px;
  clip-path: polygon(
    0% var(--notchSize),
    var(--notchSize) 0%,
    100% 0%,
    100% 100%,
    0% 100%
  );
}
.buttonrow {
  margin: 35px 0 0;
  text-align: right;
  width: 100%;
}
button {
  background: var(--shared-background);
  border: 3px solid #fff;
  border-radius: 0.2em;
  padding: 5px 15px;
  color: #fff;
  text-transform: uppercase;
  font-size: 24px;
  cursor: pointer;
}
button:not([disabled="disabled"]):hover {
  background: #fff;
  color: #4b6b6a;
}
button[disabled="disabled"] {
  opacity: 0.3;
}
form > i,
form .form-control,
form .form-control:focus {
  font-size: 26px;
  background: transparent;
  color: #fff;
  outline: none !important;
}
input[name="cvc"] {
  max-width: 70px;
}
input[name="creditcard"],
input[name="creditcard"]:focus {
  font-size: 37px;
}
select[name="month"] {
  max-width: 75px;
}
select[name="year"] {
  max-width: 110px;
}
.flexrow {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.flexrow.flow-left {
  justify-content: left;
}
.flexrow.flow-right {
  justify-content: flex-end;
}
i.material-icons {
  font-size: 30px;
  vertical-align: text-bottom;
}
form h3 > i.material-icons {
  font-size: 24px;
  vertical-align: text-top;
  color: #4b6c6b;
}
label {
  display: block;
  margin: 25px 0 0 0;
}
form .form-control,
form .form-control:hover,
form .form-control:focus {
  display: inline-block;
  box-shadow: none;
  border: none;
  border-bottom: 3px solid #ffffff;
  border-radius: 0;
  text-align: left;
}
.cover {
  z-index: -1;
  top: 0;
  left: 0;
  position: fixed;
  width: 100%;
  box-shadow: inset 0px 0px 165px 120px rgba(0, 0, 0, 0.25);
  height: 100vh;
  background: radial-gradient(
    at 90% -40%,
    rgba(197, 238, 171, 1) 0%,
    rgba(84, 133, 150, 1) 68%,
    rgba(51, 94, 158, 1) 100%
  );
}
.card-type {
  float: right;
}
::placeholder {
  color: rgba(255, 255, 255, 0.3) !important;
  opacity: 1;
}


 </style>



 <link rel="stylesheet" href="main.css">
 <link rel="stylesheet" href="customer.css">

 <div class="topnav">
    <a href="LoggedCustomer.php" >Home Page</a>


</div>
</head>
<body>


    <?php 
    include '../db_conn.php';
    $tid=$_SESSION['customer_id'];
    ?>
    
    <td> <form ='paymentfee.php' method='post' >
       <p>
        <label for="User name"> Card Owner's Name</label>
        <input type="text" name="name" value="<?php echo $_POST['name'] ?? ''; ?>" id="firstName">
    </p>
    <p>
        <label for="name"> Card Number</label>
        <input type="text" name="number"  value="<?php echo $_POST['number'] ?? ''; ?>">
    

 <label>Expiration Date</label>
           <label>month and year</label>
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

             <select  name="year">

                   <option value="2021">2021</option>
              <option value="2022">2022</option>
                  <option value="2023">2023</option>
                      <option value="2024">2024</option>
                          <option value="2025">2025</option>
            </select>
          
 <p>
              <label for="password">Cvv</label>
        <input type="text"  name="cv"   "/>
</p>


       <div class='button'>

            <input type='hidden' name='tid' value='<?php echo  $tid;?>' />
            <button style='margin:0px' class='btn btn-success pull-right 'type='submit'>PAY RENT</button>
        </div>

    </form>








</body>
</html>
<?php
$tid = $_SESSION['customer_id'];
$block=$_SESSION['Block'];
$id=$_GET['id'];

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



 
 $sql1 = "SELECT * FROM expenses where Block='$block' and id=$id ";
 $result= mysqli_query($conn, $sql1);
   $row =$result->fetch_assoc();
   $expense=$row['expense'];
   $details=$row['Details'];
   $Block=$row['Block'];
   $expenseid=$id;
 
$id=$_GET['id'];
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
    
}

?>

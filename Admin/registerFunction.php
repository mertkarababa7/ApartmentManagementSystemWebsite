<?php
function validate($data){
       $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
  }

//Register progess start, if user press the signup button
if (isset($_POST['signUp'])) {
if (empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['door_number']) || empty($_POST['phone_number']) || empty($_POST['email'])  || empty($_POST['people']) || empty($_POST['deposit']) || empty($_POST['user_name']) || empty($_POST['CustomerPassword']) ) {
echo "Please fill up all the required field.";
}
else
{

$name = validate($_POST['name']);
$surname = validate($_POST['surname']);
$door_number =validate($_POST['door_number']);
$phone_number=validate($_POST['phone_number']);
$email=validate($_POST['email']);
$people=validate($_POST['people']);
$deposit=validate($_POST['deposit']);
$user_name=validate($_POST['user_name']);
$CustomerPassword=validate($_POST['CustomerPassword']);
$Block=validate($_POST['Block']);
include('../db_conn.php');
$sQuery = "SELECT customer_id from customer where door_number=? LIMIT 1";
$iQuery = "INSERT Into customer (name, surname, door_number,phone_number,email,people,deposit,user_name,CustomerPassword,date,Block) values(?,?,?, ?, ?,?,?,?,?,CURDATE(),?)";
 
 $check=mysqli_query($conn,"select * from customer where door_number='$door_number'");
  $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
      echo "This Door Number already taken";
   } else {

$stmt = $conn->prepare($sQuery);
$stmt->bind_param("s", $surname);
$stmt->execute();
$stmt->bind_result($customer_id);
$stmt->store_result();
$rnum = $stmt->num_rows;

if($rnum==0) { //if true, insert new data
          $stmt->close();
          
          $stmt = $conn->prepare($iQuery);
        $stmt->bind_param("ssssssssss", $name, $surname, $door_number,$phone_number,$email,$people,$deposit,$user_name,$CustomerPassword,$Block);
          if($stmt->execute()) {
            echo 'Register successfully';}
            header("Location: Landlord.php");
        

        } else { 
       echo 'some other problem triggered.';
     }
$stmt->close();
$conn->close(); // Closing database Connection
}
}
}
?> 
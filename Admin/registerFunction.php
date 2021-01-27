<?php
function validate($data){
       $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
  }

//Register progess start, if user press the signup button
if (isset($_POST['signUp'])) {
if (empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['door_number']) || empty($_POST['phone_number']) || empty($_POST['email'])   || empty($_POST['CustomerPassword']) ) {
 $message = 'Please Fill In The Blanks!! .';

    echo "<SCRIPT> //not showing me this
        alert('$message')
    </SCRIPT>";
}
else
{

$name = validate($_POST['name']);
$surname = validate($_POST['surname']);
$door_number =validate($_POST['door_number']);
$phone_number=validate($_POST['phone_number']);
$email=validate($_POST['email']);




$CustomerPassword=validate($_POST['CustomerPassword']);
$Block=validate($_POST['Block']);
$hash=password_hash($CustomerPassword, PASSWORD_DEFAULT); 
include('../db_conn.php');


 $user_check_query = "SELECT * FROM customer WHERE name='$name'  LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  $admin_id=$_SESSION['id'];

$Query = "INSERT Into customer (name, surname, door_number,phone_number,email,CustomerPassword,date,Block,Active,admin_id) VALUES('$name', '$surname', '$door_number', '$phone_number', '$email','$hash',CURDATE(),'$Block','1','$admin_id')";
  mysqli_query($conn, $Query);
    $query1 = "SELECT customer_id FROM customer WHERE name='$name'";
    $result1 = mysqli_query($conn, $query1);
    $user1 = mysqli_fetch_assoc($result1);
    $userid = $user1['customer_id'];

    $query2 = "UPDATE flats SET Ccustomer_id = '$userid', isfull = '1' WHERE door_number = '$door_number' and Block='$Block'";
    mysqli_query($conn, $query2);
    
   $message = 'Customer Successfully Created.';

    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('Landlord.php');
    </SCRIPT>";
    
}
   }
 


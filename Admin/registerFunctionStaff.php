<?php

$link = mysqli_connect("localhost", "root", "", "webapartment");
 
function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	// datayı validate ile kontrol ettikten sonra html sayfasında ki text valuesinden postladı
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if (isset($_POST['signUp'])) {
if (empty($_POST['name']) || empty($_POST['job']) || empty($_POST['phoneNumber'])|| empty($_POST['Details'])|| empty($_POST['Block']) ) {
 $message = 'Please Fill In The Blanks!! .';

    echo "<SCRIPT> //not showing me this
        alert('$message')
    </SCRIPT>";
}
else{


$name=validate($_POST['name']);
$job=validate($_POST['job']);
$phoneNumber=validate($_POST['phoneNumber']);
$Details=validate($_POST['Details']);
$Block=validate($_POST['Block']);
 $admin_id=$_SESSION['id'];
 
$sql = "INSERT INTO staff (name, job, phoneNumber,Details,Block,admin_id) VALUES ('$name', '$job', '$phoneNumber','$Details','$Block','$admin_id')";
if(mysqli_query($link, $sql)){
    
   $message = 'Staff Successfully Created.';

    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('Landlord.php');
    </SCRIPT>";

} else{ 
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


mysqli_close($link);
}
}
?>


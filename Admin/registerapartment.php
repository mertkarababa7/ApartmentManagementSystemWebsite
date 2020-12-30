<?php

$link = mysqli_connect("localhost", "root", "", "apartment");
 
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
if (empty($_POST['Block']) || empty($_POST['door_number']) || empty($_POST['floor'])|| empty($_POST['price']) ) {
echo "Please fill up all the required field.";
}
else{


$Block=validate($_POST['Block']);
$door_number=validate($_POST['door_number']);
$floor=validate($_POST['floor']);
$price=validate($_POST['price']);
$new =validate($_POST['Block'] . '-' . $_POST['door_number']); 
$sql = "INSERT INTO flats (Block, door_number, floor,price) VALUES (('$Block'),('$new'),('$floor'),('$price'))";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{ 
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


mysqli_close($link);
}
}
?>


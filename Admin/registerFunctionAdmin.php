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
if (empty($_POST['name']) || empty($_POST['user_name']) || empty($_POST['password']) ) {
echo "Please fill up all the required field.";
}
else{


$name=validate($_POST['name']);
$user_name=validate($_POST['user_name']);
$password=validate($_POST['password']);

 
$sql = "INSERT INTO users (user_name, name, password) VALUES ('$user_name', '$name', '$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{ 
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


mysqli_close($link);
}
}
?>


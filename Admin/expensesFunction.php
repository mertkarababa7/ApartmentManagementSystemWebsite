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
if (empty($_POST['expense']) || empty($_POST['detail']) || empty($_POST['Block']) ) {
echo "Please fill up all the required field.";
}
else{


$expense=validate($_POST['expense']);
$detail=validate($_POST['detail']);
$Block=validate($_POST['Block']);

 
$sql = "INSERT INTO expenses (expense, Details,Block,date) VALUES ('$expense', '$detail', '$Block',CURDATE())";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{ 
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


mysqli_close($link);
}
}
?>


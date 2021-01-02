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
if (empty($_POST['name']) || empty($_POST['job']) || empty($_POST['phoneNumber'])|| empty($_POST['Details']) ) {
echo "Please fill up all the required field.";
}
else{


$name=validate($_POST['name']);
$job=validate($_POST['job']);
$phoneNumber=validate($_POST['phoneNumber']);
$Details=validate($_POST['Details']);

 
$sql = "INSERT INTO staff (name, job, phoneNumber,Details) VALUES ('$name', '$job', '$phoneNumber','$Details')";
if(mysqli_query($link, $sql)){
    ?>
        <script>

            alert('Successfull !!');
            window.open('admin.php','_self');
            
        </script>
        <?php

} else{ 
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


mysqli_close($link);
}
}
?>


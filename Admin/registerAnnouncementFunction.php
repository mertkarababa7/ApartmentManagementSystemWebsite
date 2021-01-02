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
if (empty($_POST['Header']) || empty($_POST['Details'])|| empty($_POST['mandatory'])|| empty($_POST['Block'])   ) {
echo "Please fill up all the required field.";
}
else{


$Header=validate($_POST['Header']);
$Details=validate($_POST['Details']);
$Time=validate($_POST['Time']);
$mandatory=validate($_POST['mandatory']);
$Block=validate($_POST['Block']);
 
$sql = "INSERT INTO announcement (head, details, time,openedDate,mandatory,Block) VALUES ('$Header', '$Details', '$Time',CURDATE(),'$mandatory','$Block')";
if(mysqli_query($link, $sql)){
    ?>
        <script>

            alert('Successfull !!');
            window.open('registerAnnouncement.php','_self');
            
        </script>
        <?php

} else{ 
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


mysqli_close($link);
}
}
?>


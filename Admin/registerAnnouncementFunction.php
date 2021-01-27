<?php

$link = mysqli_connect("localhost", "root", "", "beren");
 
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
if (empty($_POST['Header']) || empty($_POST['Details'])|| empty($_POST['Block'])   ) {
 $message = 'Please Fill In The Blanks!! .';

    echo "<SCRIPT> //not showing me this
        alert('$message')
    </SCRIPT>";
}
else{


$Header=validate($_POST['Header']);
$Details=validate($_POST['Details']);
$Block=validate($_POST['Block']);
 $admin_id=$_SESSION['id'];
 
$sql = "INSERT INTO announcement (head, details,openedDate,Block,admin_id) VALUES ('$Header', '$Details',CURDATE(),'$Block','$admin_id')";
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


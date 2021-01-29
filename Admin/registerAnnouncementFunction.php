<?php
include '../db_conn.php';
 
function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	// datayı validate ile kontrol ettikten sonra html sayfasında ki text valuesinden postladı
if($conn === false){
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
if(mysqli_query($conn, $sql)){
   
        $message = 'Announcement Created!! .';

    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('viewAnnouncement.php');
    </SCRIPT>";
        

} else{ 
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


mysqli_close($conn);
}
}
?>


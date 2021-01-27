<?php 
// database bağlantısını yan dosyadan çekiyor
session_start(); 
include "../db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {
  
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	
	$uname = $_POST['uname'];
	$pass = $_POST['password'];
	
 
	if (empty($uname)) {

	    $message = 'Please Enter A Username.';
    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('../index.php');
    </SCRIPT>";
	}else if(empty($pass)){
	        $message = 'Please Enter A Password.';
    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('../index.php');
    </SCRIPT>";
        
	}else{
	  
		$sql = "SELECT * FROM users WHERE user_name='$uname'";
		$result = mysqli_query($conn, $sql);
	    $row = mysqli_fetch_assoc($result);
		 if (password_verify($pass, $row['password'])) 
		
            {
			
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['phoneNumber'] = $row['phoneNumber'];
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: admin.php");	
		        exit();
            }else{
			 
				 $message = 'Unvalid Username Or Password.';
    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('../index.php');
    </SCRIPT>";
    
			}
		}
	
	
}else{
	header("Location: index.php");
	exit();
}
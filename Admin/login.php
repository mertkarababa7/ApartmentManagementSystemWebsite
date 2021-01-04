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
	   
		header("Location: ../index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
	   
        header("Location: ../index.php?error=Password is required");
	    exit();
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
			 
				header("Location: ../index.php?error=Incorect User name or password");
		        exit();
			}
		}
	
	
}else{
	header("Location: index.php");
	exit();
}
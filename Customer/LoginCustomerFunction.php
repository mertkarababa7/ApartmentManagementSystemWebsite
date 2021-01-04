
<?php 
// database bağlantısını yan dosyadan çekiyor
session_start(); 
include "../db_conn.php";
if (isset($_POST['cname']) && isset($_POST['password'])) {
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	$cname = $_POST['cname'];
	$pass = $_POST['password'];
	

	if (empty($cname)) {
	   
		header("Location: ../LoginCustomer.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
	   
        header("Location: ../LoginCustomer.php?error=Password is required");
	    exit();
	}else{
	  
		$sql = "SELECT * FROM customer WHERE name='$cname'";
		$result = mysqli_query($conn, $sql);
	    $row = mysqli_fetch_assoc($result);
		 if (password_verify($pass, $row['CustomerPassword'])) 
		
            {
			    $_SESSION['name'] = $row['name'];
            	$_SESSION['surname'] = $row['surname'];
            	$_SESSION['customer_id'] = $row['customer_id'];
            	$_SESSION['Block']=$row['Block'];
            	header("Location: LoggedCustomer.php");	
		        exit();
            }else{
			 
				header("Location: ../LoginCustomer.php?error=Incorect User name or password");
		        exit();
			}
		}
	
	
}else{
	header("Location: LoginCustomer.php");
	exit();
}
 




<?php 
// database bağlantısını yan dosyadan çekiyor
session_start(); 
include "../db_conn.php";
if (isset($_POST['cname']) && isset($_POST['password'])) {
  // datayı trim-strip-special karakter var mı diye kontrol ediyor
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	// datayı validate ile kontrol ettikten sonra html sayfasında ki text valuesinden postladı
	$cname = validate($_POST['cname']);
	$pass = validate($_POST['password']);
	
 
	// valueleri tuttuktan sonra boş olup olmadıklarını anlamak için basit bir if else
	if (empty($cname)) {
	   //username boşsa yönlendirme yap sen değiştir kafana göre echo at istersen
		header("Location: ../LoginCustomer.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
	   //pass boşsa yönlendirme yap sen değiştir kafana göre echo at istersen
        header("Location: ../LoginCustomer.php?error=Password is required");
	    exit();
	}else{
	  // databasede kayıtlı olan kolona text value eşitledik.
		$sql = "SELECT * FROM customer WHERE name='$cname' ";
     //bağlantıyı  result fonksiyonuna atadık
		$result = mysqli_query($conn, $sql);
	 // mysqli_num_rows databaseden resultun döndürdüğü cevabın kolon sayısına bakan özel bir fonksiyon.
	 //kolon sayısı 1 den büyükse fetch_assoc 
		if (mysqli_num_rows($result) === 1) {
		//assoc yine özel bir fonksiyon çektiğimiz result bilgisini array şeklinde tutuyor ki parçalara ayırabil.
			$row = mysqli_fetch_assoc($result);
			// girilen bilgi database ile uyuyorsa home.php sayfasına git ve bilgileri depola
            if ($row['name'] === $cname && $row['CustomerPassword'] === $pass) {
			  // session yine özel bir fonksiyon süper global şeklinde datayı tutmanı sağlar ve her sayfadan çekebilirsin artık bu bilgileri.
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
		}else{
			header("Location: ../LoginCustomer.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: ../LoginCustomer.php?error=Incorect User name or password");
	exit();
}



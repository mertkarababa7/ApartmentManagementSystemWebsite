
<?php 
session_start();

if (isset($_SESSION['customer_id']) && isset($_SESSION['name'])) {



}else{
     header("Location: index.php");
     exit();
}
 ?>
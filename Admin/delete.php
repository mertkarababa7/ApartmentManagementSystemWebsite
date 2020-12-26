<?php 

include '../db_conn.php';

$customer_id=$_GET['ci'];
$query="DELETE FROM customer WHERE customer_id='$customer_id'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo "Deleted";
	header("Location: Landlord.php");
}
else
{
echo" not deleted";
}
 ?>
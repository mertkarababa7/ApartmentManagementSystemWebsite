<?php 

include '../db_conn.php';

$customer_id=$_GET['ci'];
$query="DELETE FROM transaction WHERE id='$customer_id'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo "Deleted";
	header("Location: Tenants.php");
}
else
{
echo" not deleted";
}
 ?>
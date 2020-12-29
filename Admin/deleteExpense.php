<?php 

include '../db_conn.php';

$id=$_GET['id'];
$query="DELETE FROM expenses WHERE id='$id'";
$data=mysqli_query($conn,$query);
if($data)	
{
	echo "Deleted";
	header("Location: viewExpenses.php");
}
else
{
echo" not deleted";
}
 ?>
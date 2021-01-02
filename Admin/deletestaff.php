<?php 

include '../db_conn.php';

$id=$_GET['si'];
$query="DELETE FROM staff WHERE id='$id'";
$data=mysqli_query($conn,$query);
if($data)	
{
	echo "Deleted";
	header("Location:viewStaff.php");
}
else
{
echo" not deleted";
}
 ?>
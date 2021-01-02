<?php 

include '../db_conn.php';

$id=$_GET['ci'];
$query="DELETE FROM announcement WHERE id='$id'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo "Deleted";
	header("Location:viewAnnouncement.php");
}
else
{
echo" not deleted";
}
 ?>
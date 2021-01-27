<?php 

include '../db_conn.php';

$dueid=$_GET['ci'];
$query="UPDATE dues SET isactive=0, closeDate=CURDATE() WHERE id='$dueid'";
$data=mysqli_query($conn,$query);
if($data)	
{
	echo "Closed";
	header("Location:dueview.php");
}
else
{
echo" not deleted";
}
 ?>
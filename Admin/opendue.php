<?php 

include '../db_conn.php';

$dueid=$_GET['ci'];
$null=NULL;
$query="UPDATE dues SET isactive=1 , closeDate='$null'  WHERE id='$dueid'";
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
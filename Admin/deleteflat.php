<?php 

include '../db_conn.php';

$flat_id=$_GET['ci'];
$query="DELETE FROM flats WHERE flat_id='$flat_id' and isfull='0'";
$data=mysqli_query($conn,$query);
if($data)	
{
	echo "Deleted";
	header("Location: viewflats.php");
}
else
{
echo" not deleted";
}
 ?>
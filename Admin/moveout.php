<?php 

include '../db_conn.php';
?>
<?php
$customer_id=$_GET['ci'];

$query1="INSERT INTO flathistory(door_number,customer_id,MoveIn,MoveOut,name,surname,phoneNumber)
SELECT door_number,customer_id,date,CURDATE(),name,surname,phone_number FROM customer
WHERE customer_id='$customer_id'";
$data=mysqli_query($conn,$query1);
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



<?php
$customer_id=$_GET['ci'];


$query="UPDATE customer

SET Active = '0', OutDate=CURDATE()
WHERE customer_id='$customer_id'";
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

 <?php
$customer_id=$_GET['ci'];


$query="UPDATE flats

SET isfull = '0'
WHERE cCustomer_id='$customer_id'";
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
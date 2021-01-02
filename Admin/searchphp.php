<?php
include "../db_conn.php";
$search =$_POST['search'];
$sql="select * from customer where name like '%$search%' ";
$result=$conn->query($sql);
if($result->num_rows>0){
  while($row=$result->fetch_assoc()){
    echo $row["name"];
  } 
}
else{
  echo "no records";
}
 ?>
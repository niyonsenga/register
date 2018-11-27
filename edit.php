<?php
if (isset($_GET["registration"])){ 
$employee_id = $_GET['id'];
$fname = $_GET['first_name'];
$lname = $_GET['last_name'];
$sex= $_GET['sex'];
$bd = $_GET['birth_date'];
$phone= $_GET['phone_number'];
$address = $_GET['address'];
$post = $_GET['post'];
}
$query = "update employee set first_name='$fname', last_name='$lname',sex='$sex',birth_date='$bd',phone_number='$phone',address='$address',post='$post' where employee_id='$id'";

if(mysqli_query($conn,$query))
{
	echo"Data have been updated successfully";
	header("Location:index.php");
}
else
{
	echo "Error occured while updating";
	
}
mysqli_close($conn);
 ?>

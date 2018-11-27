<?php
	$employee_id=$_GET['id'];
	
	include('dbconnect.php');
	
	$query="delete from employee where employee_id='$employee_id'";
	
	if(mysqli_query($conn,$query))
	{
		echo "Data has been deleted from database";
		header("Location:check.php");
	}
	else
	{
		echo "Data has not been deleted from database"; msqli_error($conn);
	}
	mysqli_close($conn);
?>
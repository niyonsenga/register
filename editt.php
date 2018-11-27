<?php
if (isset($_GET["submit"]))
{
	$eid=$_GET['employee_id'];
	$a=$_GET['first_name'];
	$b=$_GET['last_name'];
	$c=$_GET['sex'];
	$d=$_GET['birth_date'];
	$e=$_GET['phone_number'];
	$f=$_GET['address'];
	$p=$_GET['post'];
	
	//add connection_aborted
	include('dbconnect.php');
	//create query
	$query="update employee set first_name='$a',last_name='$b',sex='$c',birth_date='$d',phone_number='$e',address='$f',post='$p' where employee_id='$eid'";
	
	if(mysqli_query($conn,$query)){
	
	echo"update is successfuly done,so you can go to check in your form";}
	//header("location:index.php");}
	else
	{
	echo"update failed";
	}
	mysqli_close($conn);
	
}
?>
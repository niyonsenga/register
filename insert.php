<?php
include('dbconnect.php');                  																
$efname= $_POST['first_name'];                      
$elname= $_POST['last_name'];
$esex= $_POST['sex']; 
$ebd= $_POST['birth_date'];                     
$ephone= $_POST['phone_number'];
$eaddress= $_POST['address']; 
$epost= $_POST['post'];
$cimage= $_POST['image'];
                     					
$query="INSERT INTO employee(first_name,last_name,sex,birth_date,phone_number,address,post,image) VALUES('$efname','$elname','$esex','$ebd','$ephone','$eaddress','$epost','$cimage')";
if(mysqli_query($conn,$query))
{
//echo" your request was successsful admitted. thank you..";
header("location:home.php");
}
else
{
echo"error in query execution";
}
mysqli_close($conn);
?>
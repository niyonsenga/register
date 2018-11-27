<?php
$host="localhost";
$user="root";
$password="";
$dbname="car";
$conn=mysqli_connect($host,$user,$password,$dbname);
if(!$conn)
{
die("error in connection has occured");
}
?>
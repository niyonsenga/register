<! DOCTYPE html>
<html lang="en">
<head>
    <title>update form</title>
	<meta charset="utf-8"  />
	<meta name="viewport" content="width =device-width,initial-scale=1">
    <link rel="stylesheet" href="../../../Users/Emmy/AppData/Local/Temp/bootstrap/dist/css/bootstrap.min.css" />
	
	<script src="jquerry.js"</script>
	<script  src="bootstrap\dist\js\bootstrap.min.js"</script>
</head>
<body>
<?php
	$id=$_GET['id'];
	//echo $id;
	//add connection of database
	include('dbconnect.php');
	//create a query to display record in edit form
	
	$query=" select * from employee where employee_id='$id'";
	
	$result=mysqli_query($conn,$query);
?>


<div class="container bg-info">
	<h3>change the borrower information</h3>
	<form role="form" action="editt.php" method="get">
	
	<?php
		while($row=mysqli_fetch_assoc($result)){
	?>
	<input type="hidden" name="employee_id" value="<?php echo $row['employee_id'];?>">
		<div class="form-group">
			<label>first name:&nbsp;&nbsp;</label>
			<input type="text" name="first_name" class="form-control" value="<?php echo $row['first_name'];?>">
		</div> 
		<div class="form-group">
			<label>last name:&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="last_name" class="form-control" value="<?php echo $row['last_name'];?>">
		</div>
		
		<div class="form-group">
			<label>sex: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="sex" class="form-control" value="<?php echo $row['sex'];?>">
		</div>
		<div class="form-group">
			<label>birth date:&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="birth_date" class="form-control" value="<?php echo $row['birth_date'];?>">
		</div>
		<div class="form-group">
			<label>phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="phone_number" class="form-control" value="<?php echo $row['phone_number'];?>">
		</div>
		
		<div class="form-group">
			<label>address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="address" class="form-control" value="<?php echo $row['address'];?>">
		</div>
		<div class="form-group">
			<label>post:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="post" class="form-control" value="<?php echo $row['post'];?>">
		</div>
		
		
		
		
		<button type="submit" name="submit" class="btn bg-primary  btn-block">save change</button>
		
		<?php
	  	  }
		  mysqli_close($conn);
	  ?>
		
      </form>
			
 </div>

</body>


</html>
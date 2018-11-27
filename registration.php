<! doctype html>
<html lang="en">
<head>
       <title>new register</title>
       <meta charset="utf-8">
       <meta name="viewport"content="device-width,unitial-scale=1">
       <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
       <script src="js\jquery.js"></script>
       <script src="bootstrap\js\bootstrap.js"></script>
</head>
<style>  
    .login-panel {  
        margin-top: 10px;  
  
</style>  
<body>  
  
  <div class="container bg-success" style="padding-top:20px; padding-botton:20;">
     
	  <div class="row">
	  
	  <div class="col-sm-4">
 <img src="logo.jpg" >
</div>

<div class="col-sm-8">
<H4>welcame to rwanda rental cars ltd</H4>
<img src="image4.jpg">
</div>
</div>



<div class="container"> 
    <div class="row"> 
        <div class="col-md-4 col-md-offset-4"> 
            <div class="login-panel panel panel-success">  
                <div class="panel-heading"> 
				 <center><a href="login.php">Login</a></center> 
				 <hr/>
                    <h3 class="panel-title">create new account</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="registration.php">  
                        <fieldset>  
                            <div class="form-group">  
                               <input class="form-control" placeholder="Username" name="name" type="text" autofocus>  
                            </div>  
  
                            <div class="form-group">  
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                            </div>  
  
  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >  
  
                        </fieldset>  
                    </form>   
                </div>  
            </div>  
        </div>  
    </div> 
	 
</div>  
  
  
</body>  
  
</html>  
  
<?php  
  
include("dbconnect.php");  
if(isset($_POST['register']))  
{  
    $user_name=$_POST['name']; 
    $user_pass=$_POST['pass']; 
    $user_email=$_POST['email'];  
	if($user_name=='')  
    {    
    echo"<script>alert('Please enter the name')</script>";  
exit(); 
    }  
  
    if($user_pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();  
    }  
  
    if($user_email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
    exit();  
    }  
    $check_email_query="select * from users WHERE user_email='$user_email'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
    $insert_user="insert into users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";  
    if(mysqli_query($conn,$insert_user))  
    {  
        echo"<script>window.open('login.php','_self')</script>";  
    }  
} 
?>  
<?php  
session_start();  
  
?>  
<! doctype html>
<html lang="en">
<head>
       <title>login</title>
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

  <div class="container bg-primary" style="padding-top:2px; padding-botton:2;">
     
	  <div class="row">
	  
	  <div class="col-sm-4">
 <img src="logo.jpg" >

<div class="container">  
    <div class="row">  
        <div class="col-md-4 col-md-offset-2">  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  



                    <h3 class="panel-title">Login form</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="login.php">  
                        <fieldset>  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                            </div>  
  
  
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >  
                        </fieldset>  
                    </form> 
					<center><a href="index.php">new</a>
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
  
  
</body>  
  
</html>  
  
<?php  
  
include("dbconnect.php");  
  
if(isset($_POST['login']))  
{  
    $user_email=$_POST['email'];  
    $user_pass=$_POST['pass'];  
  
    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";  
  
    $run=mysqli_query($conn,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('home.php','_self')</script>";  
  
        $_SESSION['email']=$user_email;  
  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?>  
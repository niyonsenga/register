<!DOCTYPE html>
<html>
<head>
 <title>rentcar.com</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width = device-width , initial-scale = 1">
 <link rel = "stylesheet" href="bootstrap/css/bootstrap.css">
 <script src = "js/jquery.js"></script>
  <script src = "bootstrap/js/bootstrap.js"></script>
		</head>
</head>
<body>
<div class="container">
	<div class="row">
	<div class="col-sm-12">
	<div class="jumbotron text-right">
  <h1>rwanda travel for everywhere...</h1>
  <img src="image1.png"alt="image1"height="50" width="500"> 
</div>
</div>
</div>
</div>
		<nav class="navbar navbar-default">
  		<div class="container-fluid" style="background-color:#00CCCC" >
    	<div class="navbar-header">
      	<a class="navbar-brand" href="#">Rwanda</a>
    	</div>
    	<ul class="nav navbar-nav" style="background-color:#FFFFFF">
     	 			<li style="background-color:"><a href="index.php">home</a></li>
      				<li style="background-color:"><a href="check.php">check & update</a></li>
      				<li style="background-color:"><a href="login.php">help</a></li>
    			</ul>
  		</div>
		</nav>

<h1>search and discover the place where you want to visit before you take your travel</h1>

<div id="map" style="width:400px;height:400px;background:yellow"></div>

<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.2), zoom: 10
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
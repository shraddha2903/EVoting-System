<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Signup</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<link type="text/css" rel="stylesheet" href="css/font-awesome.css"/>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<link type="text/css" rel="stylesheet" href="css/others/pe-icon-7-stroke.css"/>
<link type="text/css" rel="stylesheet" href="css/ionicons.min.css"/>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.menu-aim.js"></script>
<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	
</head>

<body>
<?php 
	if(!empty($_POST['set']))
	{
		$adname=$_POST['anm'];
		$adid=$_POST['aidd'];
		$password=$_POST['pass'];
		$i="insert into adminsignup(aname,aid,password)values('$adname','$adid','$password')";
		$con=mysqli_connect("127.0.0.1","root","","evote");
		if($con)
		{
			$m=mysqli_query($con,$i);
			if($m)
			{
				header("location:adminlogin.php");
			}
		}
	}
	?>
	
	<div class="container">
		<div class="col-sm-12">
			<h2 class="bg-primary"><center>Admin Signup>></center></h2>
			<div class="jumbotron">
			<center>
				<form action="adminsignup.php"method="post">
				Name:	<input type="text"name="anm"placeholder="enter Admin Name"required class="form-control"><br><br>
					Email:<input type="text"name="aidd"placeholder="enter Admin Id"required class="form-control"><br><br>
					Password:<input type="password"name="pass"placeholder="enter Password"reqquired class="form-control"><br><br>
					<input type="submit"name="set"value="Signup" class="btn-danger">
				</form></center>
				<h3 class="bg-danger"><a href="adminlogin.php">Admin Login>></a></h3>
				<h3 class="bg-info"><a href="homepage.php">Back To Home</a></h3>
			</div>
		</div>
	</div>
</body>
</html>
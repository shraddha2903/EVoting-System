<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin.....</title>

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
	
	$pass=$_POST['pas'];
	$aid=$_POST['id'];
	$s="select * from adminsignup where aid='$aid' and password='$pass'";
    $con=mysqli_connect("127.0.0.1","root","","evote");
	if($con)
	{
		$qr=mysqli_query($con,$s);
		$fr=mysqli_fetch_row($qr);
		$a=$fr[1];
		$b=$fr[2];
		
	
		if($b==$pass && $a==$aid){
			
			header("location:adminwork.php");
		}
		else 
		{
			echo "<script>alert('invalid id')</script>";
		}
		
	}
}
	?>
	
	<div class="container"style="margin-top: 30px;">
	<div class="col-sm-12">
	<h2><a href="homepage.php">>>>Back</a></h2>
	<center>
		
	<div class="jumbotron bg-danger">
	<h2 class="bg-primary">ADMIN LOGIN..</h2>
	<form action="adminlogin.php"method="post">
	Admin ID:<input type="email"name="id"placeholder="enter Admin ID"class="bg-info"required>
	<br><br>
	Password:<input type="password"name="pas"placeholder="Enter password"class="bg-info"required>
	<br><br>
	<input type="submit"name="set"value="Login.."><br>
	</form>
	</div>
	
	</center>
	</div>
	</div>
</body>
</html>
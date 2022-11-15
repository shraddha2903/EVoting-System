<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>

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
	session_start();
	if(!empty($_POST['log']))
	{
		$uname=$_POST['unm'];
		$pass=$_POST['pas'];
		$s="select * from usersign where u_name='$uname' and password='$pass'";
		$con=mysqli_connect("127.0.0.1","root","","evote");
		if($con)
		{
			$q=mysqli_query($con,$s);
			$fr=mysqli_fetch_row($q);
				$a=$fr[0];
			$b=$fr[3];
			if($a==$uname && $b==$pass)
			{
				$_SESSION['uid']=$a;
				header("location:vote.php");
			}
			else{
				echo "<script>alert('invalid id')</script>";
			}	
		}
	}
	
	?>
<div class="container"><br><br>
	<div class="col-sm-12 jumbotron">
	<h3 class="bg-danger"><a href="homepage.php">Back To Home</a></h3>
	<center>
	<h2 class="bg-primary">User LOgin</h2><br><br>
	<img src="image/avatar2.jpg"class="img-responsive"><br><br>
	
		<form action="userlogin.php"method="post">
			Name:<input type="text"name="unm"placeholder="Enter Registered Name"required><br><br>
			Password:<input type="password"name="pas"placeholder="Enter password"required><br><br>
			<input type="submit"name="log"value="LOgin"class="btn-danger"style="width: 100%">
		</form>
		<h3 class="bg-danger"><a href="usersignup.php">Not Registered..Register Now</a></h3>
		</center>
	</div>
</div>
</body>
</html>
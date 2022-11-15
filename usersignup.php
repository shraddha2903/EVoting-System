<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>

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
	if(!empty($_POST['reg']))
	{
		$uname=$_POST['unm'];
		$mail=$_POST['email'];
		$mnum=$_POST['mnumb'];
		$pass=$_POST['pas'];
		$i="insert into usersign(u_name,mail,number,password)values('$uname','$mail','$mnum','$pass')";
		$con=mysqli_connect("127.0.0.1","root","","evote");
		if($con)
		{
			$q=mysqli_query($con,$i);
			if($q)
			{
				echo"<script>alert('user register Successfully')</script>";
			}
		}
	}
	?>

<div class="container">
	<div class="col-sm-12">
	<center>
		<h2 class="bg-primary">..Signup..</h2></center>
		<div class="jumbotron">
		<center>
			<form action="usersignup.php"method="post">
			Name:	<input type="text"name="unm"placeholder="Enter Your Name"required><br><br>
				Email:<input type="email"name="email"placeholder="Enter Email"required><br><br>
				Mob.Number<input type="number"name="mnumb"placeholder="Enter Valid Mobile Number"required><br><br>
				Password<input type="password"name="pas"placeholder="Enter Self created Password"required><br><br>
				<input type="submit"class="btn-info" name="reg"value="Register"style="width: 100%;">
			</form>
			</center>
			<br><br>
			<h3 class="bg-danger"><a href="userlogin">Already Register....Login Now</a></h3>
			<h3 class="bg-danger"><a href="homepage.php">Back To Home</a></h3>
		</div>
	</div>
</div>
</body>
</html>
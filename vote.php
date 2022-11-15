<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Vote Now</title>


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
<div class="container">
<h2 class="bg-primary">Voting System</h2>
	<h3><a href="logout.php">Logout</a></h3>

<br><br>
	<div class="col-sm-12 jumbotron">
<?php 
		session_start();
		$uname=$_SESSION['uid'];
	$s="select * from candidate";
	$con=mysqli_connect("127.0.0.1","root","","evote");
	if($con)
	{
		$q=mysqli_query($con,$s);
		while($fa=mysqli_fetch_array($q))
		{
			$a=$fa[1];
			$b=$fa[5];
			$c=$fa[0];
			$d=$fa[3];
				$e=$fa[4];
		
	?>

	<table class="table table-responsive table-condensed">
		<tbody>
			<tr>
				<td>
					
								<div class="row">
									<div class="col-sm-6"><img src="image/<?php echo $b; ?>" alt="..." class="img-responsive"/></div></div>
				</td>
				<td>
								<div class="row">
									<div class="col-sm-3"><h2><?php echo $a;?></h2></div>
								</div>
								
							</td>
							<td>
							<form action="vote.php"method="post">
								<div class="row">
									<div class="col-sm-3">
									
										<div class="form-group">
											<input type="radio"value="<?php echo $a;?>"name="can_name"class="list-group">
									</div>
									
									</div>
								</div>
								
							</td>
			</tr>
		</tbody>
	</table>
		
		<?php
	
	
			
		}
			}
		?>
		<input type="submit"name="votecaste"class="btn btn-success"value="now caste your vote">	
										</form>
										
										
	<?php 
	
			
	
	if(empty($_POST['can_name']))
		{
			echo"<script>alert('Please select candidate first')</script";
		}
	
		else{	
	if(isset($_POST['votecaste']))
	{
		$can_name=$_POST['can_name'];
		
		
		$s="select * from candidate where c_name='$can_name'";
		
		if($con)
		{$q11=mysqli_query($con,$s);
		 $fa=mysqli_fetch_row($q11);
		$r1=$fa[0];
		 $r2=$fa[6];
		/*}*/
		
		$in="insert into result(id,c_name,user)values('$r1','$can_name','$uname')";
		
		/*
		if($con)
		{
		*/	
			$q1=mysqli_query($con,$in);
			if($q1)
			{
			
				
				$update="update candidate set total_vote='$r2'+'1' where c_name='$can_name'";
				$xe=mysqli_query($con,$update);
				
				if($xe)
				{
					echo"<script>alert('You Have vote Successfully')</script>";
				}
				else{
					echo"<script>alert('You did not vote Successfully')</script>";
				}
			
				
			}
		
	}
	}}
	?>
		
	</div>
</div>
</body>
</html>
<!doctype html>
<?php 


	if(isset($_POST['dell']))
	{
		
		$uname=$_GET['nam'];
		$fname=$_GET['fnam'];
		
		$de="delete from candidate where c_name='$uname' and f_name='$fname'";
		$con=mysqli_connect("127.0.0.1","root","","evote");
			
		if($con)
		{
			$q=mysqli_query($con,$de);
			if($q)
			{
			echo"<script>alert('Candidate Deleted')</script>";
		}
			
		}
	}
?>
<html>
<head>
<meta charset="utf-8">
<title>Admin Activity...</title>

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
<?php
	if(!empty($_POST['set'])){
	
		$uname=$_POST['nm'];
		$fname=$_POST['fnm'];
		$course=$_POST['course'];
		$year=$_POST['year'];
		$img=$_POST['imag'];
		$tvote=0;
		
		
	$i="insert into candidate(c_name,f_name,course,year,image,total_vote)values('$uname','$fname','$course','$year','$img','$tvote')";
		
		$con=mysqli_connect("127.0.0.1","root","","evote");
		
		if($con)
		{
			mysqli_query($con,$i);
			move_uploaded_file($_POST['imag'],"image/".$img);
		
		
	}
}
	
	?>
<body>
<div class="container">
	<div class="col-sm-6">
	<h2 class="bg-danger"><a href="adminsignup.php">Admin Signup>></a></h2>
		<div class="jumbotron">
			<div class="panel">
				<div class="panel-heading"><center><h2 class="bg-danger">Add New Candidate...</h2></center><hr></div>
				<div class="panel-body">
					<form action="adminwork.php"method="post">
						Candidate Name:<input type="text"placeholder="Enter participant's name...."name="nm"required><br><br>
						Father's Name:<input type="text"placeholder="Enter Participant's Father Name"name="fnm"required><br><br><br>
						Course:<select class="form-control"name=course>
							<option>B.C.A.</option>
							<option>Btech</option>
							<option>B.B.A.</option>
							<option>B.Com.</option>
							<option>B.com(hons)</option>
							<option>Bsc</option>
						</select><br>
						Year:<select class="form-control"name="year">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						</select><br><br>
						
						<input type="file" name="imag" value="upload file" class="btn btn-danger" ><br><br>
					
				<input type="submit" name="set" value="ADD>>>"style="width: 100%"class="btn-success"><br><br>
					</form>
					<h2 class="bg-success"><a href="homepage.php">Back To Home</a></h2>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-6"></div>
	
	
	
			
	<div class="col-sm-12">
			<div class="jumbotron">
				<center><h2 class="bg-danger">Participated Candidates<hr></h2></center>
				
	<?php 
	$s="select * from candidate";
	$con=mysqli_connect("127.0.0.1","root","","evote");
	if($con){
		$qr=mysqli_query($con,$s);
		while($fr=mysqli_fetch_array($qr))
		{
			$a=$fr[0];
			$b=$fr[1];
			$c=$fr[2];
			$d=$fr[3];
			$e=$fr[4];
			$f=$fr[5];
			$g=$fr[6];
		
		
		?>
		
		<table class="table table-responsive">
					<thead>
						<tr>
						<th></th>
						
						<th>Candidate ID</th>
							<th>Candidate Name</th>
							<th>Father Name</th>
							
							<th>Course</th>
							<th>Year</th>
							<th>vote</th>
						</tr>
		</thead>			
	
	
					<tbody>
						<tr>
							<td>
								<div class="row">
									<div class="col-sm-3"><img src="image/<?php echo $f; ?>" alt="..." class="img-responsive img-circle"/></div>
									
									<form action="adminwork.php
					<?php  echo "nam=$b &fnam=$c"; ?>"method="post">
						<input type="submit"name="dell" class="btn btn-danger" value="delete"/>
								
						</form>
								</div>
								
							</td>
							<td>
								<div class="row">
									<div class="col-sm-1"><?php echo $a;?></div>
								</div>
								
							</td>
							<td>
								<div class="row">
									<div class="col-sm-2"><?php echo $b;?></div>
								</div>
								
							</td>
							<td>
								<div class="row">
									<div class="col-sm-2"><?php echo $c;?></div>
								</div>
								
							</td>
							<td>
								<div class="row">
									<div class="col-sm-2"><?php echo $d;?></div>
								</div>
								
							</td>
							<td>
								<div class="row">
									<div class="col-sm-1"><?php echo $e;?></div>
								</div>
								
							</td>
							<td>
								<div class="row">
									<div class="col-sm-1"><?php echo $g;?></div>
								</div>
								
							</td>
						</tr>
					</tbody>
				</table>
			
		<?php
			
		}
	}
	?>
		
			</div>
		</div>
		
	
</div>
</body>
</html>
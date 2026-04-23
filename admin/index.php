<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	#main_content{
		padding: 50px;
		
	}
	#side_bar{
		
		padding: 50px;
		width: 300px;
		height: 450px;
	}
	body{
		background-color: black;
		margin: 20px;
	}
	marquee{
		color: white;
	}
	 body {
  margin: 0;
  font-family: 'Segoe UI', sans-serif;
  background: linear-gradient(135deg, #74ebd5, #ACb6E5);
}
     
      .form-card {
  background: #fff;
  padding: 30px;
  width: 100%;
  max-width: 400px;
  border-radius: 12px;
  box-shadow: 0 6px 20px rgba(0,0,0,0.15);
  text-align: center;
}


.form-card h2 {
  margin-bottom: 20px;
}



   .form-group {
text-align: left;
}

.form-group label {
  font-weight: 600;
}

.form-group input {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 6px;
}
   

</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Library Management System (LMS)</a>
			</div>
	
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">Admin Login</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../signup.php">Register</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../index.php">User Login</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	

   <marquee style="color: blue; font-size: 20px; font-weight: bold;">
📚 Welcome to the Library Management System – Explore, Learn, and Grow
</marquee>




	<div class="row">
		<div class="col-md-4" id="side_bar">
			<h5>Library Timing</h5>
			<li>Opening: 6:00 AM</li>
<li>Closing: 6:00 PM</li>

</ul>

<h5>What We provide ?</h5>
<ul>
    <li>Full furniture</li>
    <li>Free Wi-fi</li>
    <li>News Papers</li>
    <li>Air Conditioning</li>
    <li>Drinking Water</li>
    <li>Quiet Study Environment</li>
    <li>Charging Points</li>
    <li>Computer Access</li>
    <li>Printing & Photocopy</li>
    <li>Book Lending Service</li>
    <li>Reading Rooms</li>
    <li>Daily Magazines</li>
    <li>Security & CCTV</li>
</ul>
		</div>
		<div class="col-md-8" id="main_content">
			<div class="form-card">
			<center><h2><u>Admin Login Form</u></h2></center>
			<form action="" method="post">
				<div class="form-group">
					<label for="name">Email ID:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<button type="submit" name="login" class="btn btn-primary">Login</button>	
			</form>
		</div>
			<?php 
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","vikash123");
					$db = mysqli_select_db($connection,"project2");
					$query = "select * from admins where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) {
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] =  $row['name'];
								$_SESSION['email'] =  $row['email'];
								header("Location: admin_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password !!</span></center>
								<?php
							}
						}
					}
				}
			?>
		</div>
	</div>
</body>
</html>

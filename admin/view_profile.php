<?php
session_start();
 
	#fetch data from database
	$connection = mysqli_connect("localhost","root","vikash123");
	$db = mysqli_select_db($connection,"project2");
	$name = "";
	$email = "";
	$mobile = "";

	
	$query = "select * from admins where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
		$email = $row['email'];
		$mobile = $row['mobile'];

	}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
	
	#side_bar{
		background-color: whitesmoke;
		padding: 50px;
		width: 300px;
		height: 450px;
	}
	body{
		background-color: gray;
	
	}

	 .container-fluid {
         max-width: 1800px;
          margin: 50px ;
         padding: 30px;
         border-radius: 10px;
         box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      }

    
.form-card {
  background: #fff;
  padding: 30px;
  width: 100%;
  max-width: 600px;
  border-radius: 12px;
  box-shadow: 0 6px 20px rgba(0,0,0,0.15);
  text-align: center;
  margin-left: 480px;
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

   body {
  margin: 0;
  font-family: 'Segoe UI', sans-serif;
  background: linear-gradient(135deg, #74ebd5, #ACB6E5);
}
	

	
</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="user_dashboard.php">Library Management System (LMS)
				</a>
			</div>
	        <font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
	        <font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></span></font>

		    <ul class="nav navbar-nav navbar-right">
		       <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile
	        	 </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="view_profile.php">View Profile</a>
	        
	        		<a class="dropdown-item" href="change_password.php">Change Password</a>
	        	</div>
		      </li>
		      <li class="nav-item">
		    <a class="nav-link" href="logout.php">Logout</a>
		      </li>

		    </ul>
		</div>
	</nav><br>
	    <div class="form-card">	   
	   <center><h2>Student Profile Detail</h2><br></center>

		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form>
					<div class="form-group">
						<label>Name:</label>
						<input type="text" class="form-control" value="<?php echo $name;?>" disabled>
					</div>
					<div class="form-group">
						<label>Email:</label>
						<input type="text"  class="form-control" value="<?php echo $email;?>" disabled>
					</div>
					<div class="form-group">
						<label>Mobile:</label>
						<input type="text" class="form-control" value="<?php echo $mobile;?>" disabled>
					</div>

					
				</form>
			</div>
         </div>
       </div>


</body>
</html>

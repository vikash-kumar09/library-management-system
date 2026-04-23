<?php
session_start();
function get_user_issue_book_count(){
		$connection = mysqli_connect("localhost","root","vikash123");
		$db = mysqli_select_db($connection,"project2");
		$user_issue_book_count = 0;
		$query = "select count(*) as user_issue_book_count from issuee_books where student_id = $_SESSION[id]";
		$query_run = mysqli_query($connection,$query);
		while ($row = mysqli_fetch_assoc($query_run)){
			$user_issue_book_count = $row['user_issue_book_count'];
		}
		return($user_issue_book_count);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>

<style type="text/css">
	
	#side_bar{
		background-color: whitesmoke;
		padding: 50px;
		width: 300px;
		height: 450px;
	}
	.card{
		transition: transform 0.3s ease;
		border: none;
		height: 100%;
	}
    .card:hover{
    	transform: translateY(-5px);
    }
    @media (max-width: 576){
    	.card-body{
    		padding: 1.25rem;
    		text-align: center;
    	}
    	.btn-block{
    		width: 100%;
    	}
    }
    marquee{
    	background: #343a40;
    	color: white;
    	padding: 8px 0;
    	font-family: sans-serif;
    }

       body {
  margin: 0;
  font-family: 'Segoe UI', sans-serif;
  background: linear-gradient(135deg, #74ebd5, #ACB6E5);
}


   .container-fluid {
         max-width: 1800px;
          margin: 50px ;
         padding: 30px;
         border-radius: 10px;
         box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      }


</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Library Management System (LMS)
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

	
   <marquee style="color: blue; font-size: 20px; font-weight: bold;">
📚 Welcome to the Library Management System – Explore, Learn, and Grow
</marquee>
	   
   <div class="row">
		<div class="col-md-3">
			<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Issued Book</div>
				<div class="card-body">
					<p class="card-text">No of Issued Book: <?php echo get_user_issue_book_count();?></p>
					<a href="view_issued_book.php"class="btn btn-danger"  target="_blank">View Issued Books</a>
				</div>
			</div>
                     <div class="card bg-light" style="width: 300px">
				<div class="card-header">Books</div>
				<div class="card-body">
					<p class="card-text"></p>
					<a href="user_book.php"class="btn btn-danger"  target="_blank">View Available Books</a>
				</div>
                 </div>
        

		</div>
       <div class="col-md-3"></div>
       <div class="col-md-3"></div>
       <div class="col-md-3"></div>

	</div>
</div>

</body>
</html>

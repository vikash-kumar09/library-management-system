<?php
 require('functions.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
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
	   background-color: lightskyblue;
	}

     .edit {
  background: #28a745;
  color: white;
}

.edit:hover {
  background: #218838;
}

.delete {
  background: #dc3545;
  color: white;
}

.delete:hover {
  background: #c82333;
}

.table-container {
  max-width: 900px;
  margin: 40px auto;
  background: #ffffff;
  padding: 25px;
  border-radius: 10px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.table-container h2 {
  text-align: center;
  margin-bottom: 20px;
}

.custom-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 15px;
}

.custom-table thead {
  background: #007bff;
  color: white;
}

.custom-table th,
.custom-table td {
  padding: 12px 15px;
  text-align: left;
}

.custom-table tbody tr {
  border-bottom: 1px solid #eee;
}

   .container-fluid {
         max-width: 1800px;
          margin: 50px ;
         padding: 30px;
         border-radius: 10px;
         box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      }


.custom-table tbody tr:nth-child(even) {
  background: #f8f9fa;
}

.custom-table tbody tr:hover {
  background: #e9f3ff;
  transition: 0.2s;
}

      .info-bar {
  background: #e9f5ff;
  color: #007bff;
  text-align: center;
  padding: 10px;
  font-weight: 500;
}



</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="admin_dashboard.php">Library Management System (LMS)
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

	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
		<div class="container-fluid">
			
		    <ul class="nav navbar-nav navbar-center">
		      <li class="nav-item">
		        <a class="nav-link" href="admin_dashboard.php">Dashboard</a>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Books </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_book.php">Add New Book</a>
	        		<a class="dropdown-item" href="manage_book.php">Manage Books</a>
	        	</div>
		      </li>

		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Category </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_cat.php">Add New Category</a>
	        		<a class="dropdown-item" href="manage_cat.php">Manage Category</a>
	        	</div>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Authors</a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_author.php">Add New Author</a>
	        		<a class="dropdown-item" href="manage_author.php">Manage Author</a>
	        	</div>
		      </li>
	          <li class="nav-item">
		        <a class="nav-link" href="issue_book.php">Issue Book</a>
		      </li>    

           </ul>
       </div>
     </nav>
	         
	          <div class="info-bar">
  Library opens at 8:00 AM and closes at 8:00 PM
</div>     
	       <div class="table-container">
    <h2>Manage Category</h2>
    <table class="custom-table">
        ...
    </table>
</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<?php
						$connection = mysqli_connect("localhost","root","vikash123");
						$db = mysqli_select_db($connection,"project2");
						$query = "select * from category";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
								
								
								<td><?php echo $row['cat_name'];?></td>
								
								<td><button class="btn" name=""><a href="edit_cat.php?cid=<?php echo $row['cat_id'];?>">Edit</a></button>
								<button class="btn" name=""><a href="delete_cat.php?cid=<?php echo $row['cat_id'];?>">Delete</a></button>
							  </td>
							</tr>
							<?php
						}
					?>
				</table>
			</div>
			<div class="col-md-2"></div>

		
		</div>
</body>
</html>





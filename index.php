<?php
	session_start();
	$conn = mysqli_connect('localhost','root','','userinfo');
	
	if(!isset($_SESSION['email'])){
		echo "<script>window.open('login.php','_self');</script>";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD Operations</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<br><br>
<div class="container">
  <h2>Home</h2>
  <h1><a href="add_user.php">Add User</a></h1>
    <h1><a href="view_user.php">View All Users</a></h1>
  <a class="btn btn-danger" href="logout.php">Logout</a>

</div>

</body>
</html>
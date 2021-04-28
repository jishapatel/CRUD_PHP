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
  <h2>Update User</h2>
  
  <?php
	$conn = mysqli_connect('localhost','root','','userinfo');
	if(isset($_GET['update']))
	{
		$update_id = $_GET['update'];
		
		$select = "SELECT * FROM user WHERE user_id='$update_id'";
		$run = mysqli_query($conn,$select);
		$row_user = mysqli_fetch_array($run);
			$user_name = $row_user['user_name'];
			$user_email = $row_user['user_email'];
			$user_password = $row_user['user_password'];
			$user_age = $row_user['user_age'];
	}
  ?>

  <form action="" method="post">
    <div class="form-group">
      <label>Name:</label>
      <input type="text" class="form-control" value="<?php echo $user_name; ?>" placeholder="Name" name="user_name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" value="<?php echo $user_email; ?>" id="email" placeholder="Enter email" name="user_email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" value="<?php echo $user_password; ?>" id="pwd" placeholder="Enter password" name="user_password">
    </div>
    <div class="form-group">
      <label>Age:</label>
      <input type="number" class="form-control" value="<?php echo $user_age; ?>" placeholder="Age" name="user_age">
    </div>
     <input type="submit"name="insert-btn" class="btn btn-primary"/>
  </form>

  <?php
    $conn = mysqli_connect('localhost','root','','userinfo');
	
	/* if(mysqli_connect_errno())
	{
		echo "connection fail";
	}else{
		echo "connection OK";
	} */
	
	if(isset($_POST['insert-btn']))
	{
		$uuser_name = $_POST['user_name'];
		$uuser_email = $_POST['user_email'];
		$uuser_password = $_POST['user_password'];
		$uuser_age = $_POST['user_age'];
		
		$update = "UPDATE user SET user_name='$uuser_name',user_email='$uuser_email',user_password='$uuser_password',
		user_age='$uuser_age' WHERE user_id='$update_id'";
		
		$run_update = mysqli_query($conn,$update);
		
		if($run_update == true)
		{
			echo "Data has been updated <br/>";
		}
		else
		{
			echo "Failed try again";
		}
	}

  ?>
  <a class="btn btn-primary" href="view_user.php">View User</a>
</div>

</body>
</html>
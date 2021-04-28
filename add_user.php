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
  <h2>Add New User</h2>
  <form action="" method="post">
    <div class="form-group">
      <label>Name:</label>
      <input type="text" class="form-control" placeholder="Name" name="user_name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="user_email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="user_password">
    </div>
    <div class="form-group">
      <label>Age:</label>
      <input type="number" class="form-control" placeholder="Age" name="user_age">
    </div>
     <input type="submit"name="insert-btn" class="btn btn-primary"/>
	 <td><a class="btn btn-success" href="index.php">Home</a></td>
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
		$user_name = $_POST['user_name'];
		$user_email = $_POST['user_email'];
		$user_password = $_POST['user_password'];
		$user_age = $_POST['user_age'];
		
		$insert = "INSERT INTO user(user_name,user_email,user_password,user_age) 
		VALUES('$user_name','$user_email','$user_password','$user_age')";
		
		$run_insert = mysqli_query($conn,$insert);
		
		if($run_insert == true)
		{
			echo "Data has been inserted";
		}
		else
		{
			echo "Failed try again";
		}
	}
	
	

  ?>
</div>

</body>
</html>
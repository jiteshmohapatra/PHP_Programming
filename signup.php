<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: #8e75e4;
		margin: auto;
		width: 300px;
		padding: 35px;
		margin-top:30px;
	}

	</style>
<div class="container">
	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;"><b>Signup</b></div>
			<label for="email"><i style=color:white;>Enter Your Email</i></label>
			<input id="text" type="text" name="user_name" class="form-control"><br>
			<label for="email"><i style=color:white;>Enter Your Password</i></label>
			<input id="text" type="password" name="password" class="form-control"><br>

			<button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" name="click" type="submit"> Sign-up </button>
			<a href="login.php"><b style=color:white;>Click to Login</b></a><br><br>
		</form>
	</div>
</div>
</body>
</html>
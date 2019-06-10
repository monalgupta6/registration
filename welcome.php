<?php

	session_start();
	require_once "connect.php";
	if(!isset($_SESSION['user'])){
		header("location:login.php");
	}else{
		$var=$_SESSION['user'];
		$var1=mysqli_query($conn, "select * from user where id='$var'") or die(mysqli_error($conn));
		$row=mysqli_fetch_assoc($var1);
	}

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Welcome Page</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<style>
			.container {
				margin : auto;
				padding: 100px;
			}
		</style>
	</head>
	<body>
		<div class="container">
		<h2>Welcome here <i>"<?php echo $row['email'];?>"</i></h2>
		<p><a href="logout.php"><input type="submit" class="btn btn-warning" style="float:right" Value="Sign Out"></p>
		</div>
	</body>
</html>
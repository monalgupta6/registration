<?php
	session_start();

	require_once "connect.php";
	if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$pass=$_POST['password'];
		$ans=$_POST['answer'];


		if($_POST['email']==NULL or trim($_POST['email'])==NULL or !filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			echo "Value required";
			header("location:login.php");
		}
		elseif($_POST['password']==NULL or trim($_POST['password'])==NULL){
			echo "Value required";
			header("location:login.php");
		}elseif($_POST['answer']==NULL or trim($_POST['answer'])==NULL){
			echo "Value required";
			header("location:login.php");
		} 



	else{
		$var=mysqli_query($conn,"select * from user where email='$email'") or die(mysqli_error());
		if(mysqli_num_rows($var)>0){
			$res=mysqli_fetch_assoc($var);
			$password=$res['password'];
			if($password==$pass){
				$_SESSION['user']=$res['id'];
				
				
				if ($_SESSION['answer'] == $ans) {
     				echo "value entered is correct";
     			header("location:welcome.php");
			}
			else {
     			echo "value is incorrect, kindly try again";
			}
			}else{
				echo "Error: password did not match";
			}
			


		}else{
			echo "Error: email is wrong";
		}


	}
	}



?>
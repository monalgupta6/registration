<?php

	require_once "connect.php";
	if(isset($_POST['submit'])){
	
		$usrname=$_POST['username'];
		$email=$_POST['email'];
		$phn=$_POST['phonenumber'];
		$pass=$_POST['password'];
		$pass=sha1(md5($pass));
		$cnpass=$_POST['confirmpassword'];
		
		$name=$_FILES["textfile"]["name"];
			$target_dir = "txtfile/";
			$target_file = $target_dir . basename($name);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			
		if (file_exists($target_file)) {
    		echo "Sorry, file already exists.";
   			 $uploadOk = 0;
			}
		else if ($_FILES["textfile"]["size"] > 500000) {
    		echo "Sorry, your file is too large.";
    		$uploadOk = 0;
		}	
		else if($imageFileType != "xlsx" && $imageFileType != "xls" ) {
    		echo "Sorry, only XLSX, XLS files are allowed.";
    		$uploadOk = 0;		
		}	
		elseif ($uploadOk == 0) {
    		echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
    		if (move_uploaded_file($_FILES["textfile"]["tmp_name"], $target_file)) {
        	

		$var=mysqli_query($conn, "insert into user(username, email, phonenumber, password, confirmpassword, file) values ('$usrname', '$email', '$phn', '$pass', '$cnpass', '$name') ") or die(mysqli_error($conn));
		echo "The file ". basename( $name). " has been uploaded.";
		 
    	}else{
    		echo "Sorry, there was an error uploading your file.";
    	}

		if($var)
		{
			echo "Values added successfully";
			header("location:form_validation.php");
		}
		else{
			echo "Error: something went wrong";
		}
	}
}
?>
<?php

	session_start();

	$digit1 = mt_rand(1,20);
	$digit2 = mt_rand(1,20);
	if( mt_rand(0,1) === 1 ) {
   	 $math = "$digit1 + $digit2";
    	$_SESSION['answer'] = $digit1 + $digit2;
	} else {
    	$math = "$digit1 * $digit2";
    	$_SESSION['answer'] = $digit1 * $digit2;
	}	
	

	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/parsley.css">

	<style>
			.container{
				width:60%;
				margin:auto;
				padding:150px;
			}
		</style>
</head>
<body>
		<div class="container">
			<h2>Login Form</h2>
			<form id="demo-form" data-parsley-validate="" method="post" action="code_login.php">
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control" placeholder="Enter email"  data-parsley-type="email" data-parsley-trigger="change" required="" data-parsley-type-message="Email should be in format: yourname@example.com">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" id="password" class="form-control" placeholder="Enter password" required="" >
			</div>
			<?php echo $math; ?> = <input name="answer" type="text" /><br>
			<br>
			<input type="hidden" name="math">
			<input type="submit" name="submit" value="submit" class="btn btn-success">
			<p>Don't have any account?<a href="form_validation.php">Registation Here</a></p>
		</div>
	</form>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="js/parsley.min.js"></script>

<script type="text/javascript">
$(function () {
  $('#demo-form').parsley().on('field:validated', function() {
    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
  })
  .on('form:submit', function() {
    return true; 
  });
});
</script>
</body>
</html>
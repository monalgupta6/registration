<!DOCTYPE html>
<html>
	<head>
		<title>Form Validation</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		 <link rel="stylesheet" href="css/parsley.css">

		<style>
			.container{
				width:70%;
				margin:auto;
				padding:100px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<h2>Form Validation</h2>
		<form id="demo-form" data-parsley-validate="" method="post" action="code_form_validation.php" enctype="multipart/form-data">
			<div class="form-group">
			<label>UserName</label>
			<input type="text" name="username" class="form-control" placeholder="Enter username" data-parsley-pattern="^[A-Za-z]*$" data-parsley-trigger="keyup" data-parsley-pattern-message="Name should be in alphabet">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control" placeholder="Enter username"  data-parsley-type="email" data-parsley-trigger="change" required="" data-parsley-type-message="Email should be in format: yourname@example.com">
		</div>
		<div class="form-group">
			<label>ContactNumber</label>
			<input type="text" name="phonenumber" class="form-control" placeholder="Enter Contact Number" required="" data-parsley-minlength="10" data-parsley-maxlength="10" data-parsley-type="digits" data-parsley-type-message="only digits" data-parsley-trigger="keyup" data-parsley-maxlength-message="10 digits only" data-parsley-minlength-message="10 digits only">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" id="password" class="form-control" placeholder="Enter password" data-parsley-equalto="#confirmpassword" data-required="" data-parsley-minlength="7" data-parsley-type-message="Password should have atleast 7 characters" data-parsley-trigger="keyup" >
		</div>
		<div class="form-group">
			<label>Confirm Password</label>
			<input type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="Confirm password" data-required="" data-parsley-minlength="7" data-parsley-type-message="Password should match"  data-parsley-equalto="#password">
		</div>
		<div>
			<label>Upload a file:</label>
			<input type="file" name="textfile">
		</div>

		<input type="submit" name="submit" value="submit" class="btn btn-success">
		<p>Do you have already an account?<a href="login.php">Login Here</a></p>
	</form>
	</div>

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

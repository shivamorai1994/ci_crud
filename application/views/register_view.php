<html>
	<head>
		<title>My Crud</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<head>
	<body>
		<form method="POST" action="<?php echo site_url('register/signup')?>">
			<h1>Register</h1>
			Name <input type="text" name="name" id="name" class="col-md-8 col-md-offset-2"/>
			<br/>
			Email <input type="text" name="email" id="email"/>
			<br/>
			Password <input type="password" name="password" id="password"/>
			<br/>
			Confirm Password <input type="password" name="cpassword" id="cpassword"/>
			<br/>
			Phone <input type="text" name="phone" id="phone"/>
			<br/>
			<input type="submit" name="button" value="Register"/>
		</form>
	</body>
</html>
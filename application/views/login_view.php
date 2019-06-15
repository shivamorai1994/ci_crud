<html>
	<head>
		<title>My Crud</title>
	<head>
	<body>
		<form method="POST" action="<?php echo site_url('register/signup')?>">
			<h1>Login</h1>
			Email <input type="text" name="email" id="email"/>
			<br/>
			Password <input type="password" name="password" id="password"/>
			<br/>
			<input type="submit" name="button" value="Login"/>
		</form>
	</body>
</html>
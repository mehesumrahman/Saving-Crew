<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<div class="container">
		<div class="header">
			<h2>Log In</h2>
		</div>

		<form action="server.php" method="post">
			<div>
				<label for="email">Email: </label>
				<input type="email" name="email" required>
			</div>
			
			<div>
				<label for="password">Password: </label>
				<input type="password" name="password_1" required>
			</div>

			<button type="submit" name="login_user"> Login </button>

			<p>Not a user?<a href="register.php"><b>Register here</b></a></p>

		</form>
	</div>

</body>
</html>

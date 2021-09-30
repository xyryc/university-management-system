<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<center>
	<div class="login-box-homepage">
	<h1>Student Management System</h1>
	<form action="" method="POST">
		<input type="submit" name="admin_login" class="btn" value="Admin Login" required>
		<input type="submit" name="student_login" class="btn" value="Student Login" required>
	</form>
	</div>

	<?php
		//cheaking if admin_login button was pressed
		if(isset($_POST['admin_login'])){
			header("Location: admin_login.php");
		}
		//cheaking if student_login button was pressed
		if(isset($_POST['student_login'])){
			header("Location: student_login.php");
		}
	?>
	</center>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>

</head>
<body>
	<center><br><br>
	<h3>Student Management System</h3><br>
	<form action="" method="POST">
		<input type="submit" name="admin_login" value="Admin Login" required>
		<input type="submit" name="student_login" value="Student Login" required>
	</form>

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
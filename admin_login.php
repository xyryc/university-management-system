<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/jpg" href="images/icon.jpg">
</head>
<body>
	<div class="login-box">
  <h1>Admin Login</h1>
  <form action="" method="post">
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="email" placeholder="Email" required>
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" required>
  </div>

  <input type="submit" name="submit" class="btn" value="Log In">
  </form>
</div>
<?php>
    if(isset($_POST['submit'])){
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection, "")
    }

</body>
</html>
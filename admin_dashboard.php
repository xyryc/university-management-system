<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
  <link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" type="image/jpg" href="images/icon.jpg">
</head>

<?php
  session_start();
?>

<body>
	<div class="header">
    <center><strong>Admin Dashboard &nbsp&nbsp&nbsp&nbsp</strong><br>Email: <?php echo $_SESSION['email']; ?> &nbsp&nbsp
      Name: <?php echo $_SESSION['name']; ?> 
      <a href="logout.php">Logout</a>
    </center>
</div>

<br><br>

<div class="left_side">
  <form action="" method="post">
    <table>
      <tr>
        <td>
          <input type="submit" name="search_student" value="Search Student">
        </td>
      </tr>
      <tr>
        <td>
          <input type="submit" name="edit_student" value="Edit Student">
        </td>
      </tr>
      <tr>
        <td>
          <input type="submit" name="add_new_student" value="Add New Student">  
        </td>
      </tr>
      <tr>
        <td>
          <input type="submit" name="delete_student" value="Delete Student">  
        </td>
      </tr>
    </table>
  </form>
</div>


</body>
</html>
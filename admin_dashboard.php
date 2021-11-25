<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
  <link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" type="image/jpg" href="images/icon.jpg">
</head>

<?php
  session_start();
  $connection = mysqli_connect("localhost", "root", "");
  $db = mysqli_select_db($connection, "sdponedb");
?>

<body>
	<div>
      <div class="header">Admin Dashboard</div><br><br><br><br><br><br>
        <div class="login_status">
            Email: <?php echo $_SESSION['email']; ?> &nbsp&nbsp
            Name: <?php echo $_SESSION['name']; ?> &nbsp&nbsp
            <a href="logout.php">Logout</a>
        </div>
  </div>

<br><br>

<div>
  <form action="" method="post">
    <table>
      <tr>
        <td>
          <input class="btn" type="submit" name="search_student" value="Search Student">
        </td>
      </tr>
      <tr>
        <td>
          <input class="btn" type="submit" name="edit_student" value="Edit Student">
        </td>
      </tr>
      <tr>
        <td>
          <input class="btn" type="submit" name="add_new_student" value="Add New Student">  
        </td>
      </tr>
      <tr>
        <td>
          <input class="btn" type="submit" name="delete_student" value="Delete Student">  
        </td>
      </tr>
    </table>
  </form>
</div>

<div class="right_side"><br><br>
  <div id="demo">
    <?php
      if(isset($_POST['search_student'])){
        ?>
          <center>
              <form action="" method="post">
                Enter ID Number: 
                <input type="text" name="id">
                <input type="submit" name="search_student_using_id_for_search" value="Search">
              </form>
          </center> 
          <?php
      }

      if(isset($_POST['search_student_using_id_for_search'])){
        $query = "select * from student where id = '$_POST[id]'";
        $query_run = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($query_run)){
          ?>
          <table>

            <tr>
              <td><b>ID Number: </b><td>
              <td>
                <input type="text" value="<?php echo $row['id']; ?>" disabled>
              </td>
            </tr>

            <tr>
              <td><b>Name: </b><td>
              <td>
                <input type="text" value="<?php echo $row['name']; ?>" disabled>
              </td>
            </tr>

            <tr>
              <td><b>ID Number: </b><td>
              <td>
                <input type="text" value="<?php echo $row['id']; ?>" disabled>
              </td>
            </tr>

            <tr>
              <td><b>ID Number: </b><td>
              <td>
                <input type="text" value="<?php echo $row['id']; ?>" disabled>
              </td>
            </tr>

            <tr>
              <td><b>ID Number: </b><td>
              <td>
                <input type="text" value="<?php echo $row['id']; ?>" disabled>
              </td>
            </tr>

            <tr>
              <td><b>ID Number: </b><td>
              <td>
                <input type="text" value="<?php echo $row['id']; ?>" disabled>
              </td>
            </tr>

          </table>
          <?php
        }
      }


      ?>
    </div>
</div>


</body>
</html>
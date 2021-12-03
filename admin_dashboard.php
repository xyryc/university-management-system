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
              <td><b>Address: </b><td>
              <td>
                <input type="text" value="<?php echo $row['address']; ?>" disabled>
              </td>
            </tr>

            <tr>
              <td><b>Contact No. : </b><td>
              <td>
                <input type="text" value="<?php echo $row['contact_no']; ?>" disabled>
              </td>
            </tr>

            <tr>
              <td><b>Level & Term: </b><td>
              <td>
                <input type="text" value="<?php echo $row['level_term_info']; ?>" disabled>
              </td>
            </tr>

            <tr>
              <td><b>CGPA: </b><td>
              <td>
                <input type="text" value="<?php echo $row['cgpa']; ?>" disabled>
              </td>
            </tr>

          </table>
          <?php
        }
      }

      ?>
      
      <?php
      if(isset($_POST['edit_student'])){
        ?>
          <center>
              <form action="" method="post">
                Enter ID Number: 
                <input type="text" name="id">
                <input type="submit" name="search_student_using_id_for_edit" value="Search">
              </form>
          </center> 
          <?php
        }
        if(isset($_POST['search_student_using_id_for_edit'])){
        $query = "select * from student where id = '$_POST[id]'";
        $query_run = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($query_run)){
          ?>
          <table>

            <tr>
              <td><b>ID Number: </b><td>
              <td>
                <input type="text" value="<?php echo $row['id']; ?>">
              </td>
            </tr>

            <tr>
              <td><b>Name: </b><td>
              <td>
                <input type="text" value="<?php echo $row['name']; ?>">
              </td>
            </tr>

            <tr>
              <td><b>Address: </b><td>
              <td>
                <input type="text" value="<?php echo $row['address']; ?>">
              </td>
            </tr>

            <tr>
              <td><b>Contact No. : </b><td>
              <td>
                <input type="text" value="<?php echo $row['contact_no']; ?>">
              </td>
            </tr>

            <tr>
              <td><b>Level & Term: </b><td>
              <td>
                <input type="text" value="<?php echo $row['level_term_info']; ?>">
              </td>
            </tr>

            <tr>
              <td><b>CGPA: </b><td>
              <td>
                <input type="text" value="<?php echo $row['cgpa']; ?>">
              </td>
            </tr><br>

            <tr>
              <td></td>
              <td><input type="submit" name="edit" value="Update"></td>
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
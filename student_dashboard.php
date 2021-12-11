<!DOCTYPE html>
<html>

<head>
  <title>Student Dashboard</title>
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
    <div class="header">Student Dashboard</div><br><br><br><br><br><br>
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
            <input class="btn" type="submit" name="update_data" value="Edit Data">
          </td>
        </tr>
        <tr>
          <td>
            <input class="btn" type="submit" name="view_data" value="View Data">
          </td>
        </tr>
      </table>
    </form>
  </div>

  <div class="right_side"><br><br>
    <div id="demo">

      <?php
      if (isset($_POST['update_data'])) {
        $query = "select * from student where email = '$_SESSION[email]'";
        $query_run = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($query_run)){
          ?>
          <form action="student_update_data.php" method="post">
            <table>
            <tr>
              <td>
                ID:
              </td>
              <td>
                <input type="text" value="<?php echo $row['id'] ?>">
              </td>
            </tr>
            <tr>
              <td>
                Name:
              </td>
              <td>
                <input type="text" value="<?php echo $row['name'] ?>">
              </td>
            </tr>
            <tr>
              <td>
                Email:
              </td>
              <td>
                <input type="text" value="<?php echo $row['email'] ?>">
              </td>
            </tr>
            <tr>
              <td>
                Password:
              </td>
              <td>
                <input type="text" value="<?php echo $row['password'] ?>">
              </td>
            </tr>
            <tr>
              <td>
                Address:
              </td>
              <td>
                <input type="text" value="<?php echo $row['address'] ?>">
              </td>
            </tr>
            <tr>
              <td>
                Contact NO. :
              </td>
              <td>
                <input type="text" value="<?php echo $row['contact_no'] ?>">
              </td>
            </tr>
            <tr>
              <td>
                Level & Term:
              </td>
              <td>
                <input type="text" value="<?php echo $row['level_term_info'] ?>">
              </td>
            </tr>
            <tr>
              <td>
                CGPA:
              </td>
              <td>
                <input type="text" value="<?php echo $row['cgpa'] ?>">
              </td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name="update" value="Update"></td>
            </tr>
            </table>
          </form>
          <?php
        }
        }
      ?>

      <?php
      if (isset($_POST['view_data'])) {
        $query = "select * from student where email = '$_SESSION[email]'";
        $query_run = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($query_run)) {
      ?>
          <table>
            <tr>
              <td>
                ID:
              </td>
              <td>
                <input type="text" value="<?php echo $row['id'] ?>" disabled>
              </td>
            </tr>
            <tr>
              <td>
                Name:
              </td>
              <td>
                <input type="text" value="<?php echo $row['name'] ?>" disabled>
              </td>
            </tr>
            <tr>
              <td>
                Email:
              </td>
              <td>
                <input type="text" value="<?php echo $row['email'] ?>" disabled>
              </td>
            </tr>
            <tr>
              <td>
                Password:
              </td>
              <td>
                <input type="text" value="<?php echo $row['password'] ?>" disabled>
              </td>
            </tr>
            <tr>
              <td>
                Address:
              </td>
              <td>
                <input type="text" value="<?php echo $row['address'] ?>" disabled>
              </td>
            </tr>
            <tr>
              <td>
                Contact NO. :
              </td>
              <td>
                <input type="text" value="<?php echo $row['contact_no'] ?>" disabled>
              </td>
            </tr>
            <tr>
              <td>
                Level & Term:
              </td>
              <td>
                <input type="text" value="<?php echo $row['level_term_info'] ?>" disabled>
              </td>
            </tr>
            <tr>
              <td>
                CGPA:
              </td>
              <td>
                <input type="text" value="<?php echo $row['cgpa'] ?>" disabled>
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
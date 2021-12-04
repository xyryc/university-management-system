<!DOCTYPE html>
<html>

<head>
    <title>Student Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/jpg" href="images/icon.jpg">
</head>

<body>
    <div class="login-box">
        <h1>Student Login</h1>
        <form action="" method="post">
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" name="email" placeholder="Email" required>
            </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <input type="submit" name="submit" class="btn" value="Log In">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $connection = mysqli_connect("localhost", "root", "");
            $db = mysqli_select_db($connection, "sdponedb");
            $query = "select * from student where email = '$_POST[email]'";
            $query_run = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($query_run)) {
                if ($row['email'] == $_POST['email']) {
                    if ($row['password'] == $_POST['password']) {
                        header("Location: student_dashboard.php");
                    } else {
                        echo "Wrong Password";
                    }
                } else {
                    echo "Email doesn't match";
                }
            }
        }
        ?>

    </div>
</body>

</html>
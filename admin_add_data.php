<?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "sdponedb");
    $query = "insert into student value('', $_POST[id], '$_POST[name]', '$_POST[email]',
     '$_POST[password]', '$_POST[address]', '$_POST[contact_no]', '$_POST[level_term_info]',
     '$_POST[cgpa]')";
    $query_run = mysqli_query($connection, $query);
?>
<script type="text/javascript">
    alert("Informations have been Added to Database Successfully!");
    window.location.href = "admin_dashboard.php";
</script>
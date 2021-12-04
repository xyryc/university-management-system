<?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "sdponedb");
    $query = "update student set name='$_POST[name]', address='$_POST[address]',
        contact_no='$_POST[contact_no]', level_term_info='$_POST[level_term_info]',
        cgpa='$_POST[cgpa]' where id = $_POST[id]";
    $query_run = mysqli_query($connection, $query);
?>
<script type="text/javascript">
    alert("Informations Updated successfully");
    window.location.href = "admin_dashboard.php";
</script>
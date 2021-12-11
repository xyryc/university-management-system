<script type="text/javascript">
    if(confirm("Are You Sure want to delete?")){
        document.write("<?php 
            $connection = mysqli_connect("localhost", "root", "");
            $db = mysqli_select_db($connection, "sdponedb");
            $query = "delete from student where id = $_POST[id]";
            $query_run = mysqli_query($connection, $query);
            ?>");
            alert("Informations Deleted Succcessfully!");
            window.location.href = "admin_dashboard.php";
    }
    else{
        window.location.href = "admin_dashboard.php";
    } 
</script>
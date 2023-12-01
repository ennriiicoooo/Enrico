<?php 
session_start();
include('config.php');


if(isset($_GET['user_id'])){

    $user_id = $_GET['user_id'];

    $sql = "DELETE FROM tbl_user WHERE user_id = '$user_id'";

    $result = mysqli_query($conn, $sql);
    ?>

    <script>
        alert("Successfully Delete!");
        window.location.href='user_test.php';
    </script>

    <?php

}
?>
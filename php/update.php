<?php
session_start();
include('config.php');



if(isset($_POST['update'])){

    $fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $status = isset($_POST['status']) ? mysqli_real_escape_string($conn, $_POST['status']) : '';
    $edit_id = mysqli_real_escape_string($conn,$_POST['edit_id']);

    $sql_update = "UPDATE tbl_user SET
    fullname = '$fullname',
    email = '$email',
    username = '$username',
    password = '$password',
    active = '$status'
    WHERE user_id = '$edit_id'";

    if($result_update = mysqli_query($conn, $sql_update)){
        ?>
        
        <script>
            alert('Successfully Update User');
            window.location.href='user_test.php';
        </script>

        <?php
    } else {

        if(!$result_update) {die('Unsucessful added'. mysqli_error()); }
    }

    mysqli_close($conn);

    }
    ?>

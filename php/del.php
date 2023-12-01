<?php 
include('config.php');


if(isset($_GET['user_id'])){

    $user_id = $_GET['user_id'];

    $sql = "DELETE FROM tbl_user WHERE user_id = '$user_id'";

    if(mysqli_query($conn,$sql)){
        session_start();
        $_SESSION["delete"] = "Slot Deleted Successfully!";
        header("Location:user_test.php");
    }else{
        die("Something went wrong");
    }
    }else{
        echo "It does not exist";
    }
    ?>

    


<?php
session_start();
include('config.php');

if(isset($_SESSION['username'])){

    $user_check = $_SESSION['username'];

    $ses_sqli = mysqli_query($conn,"SELECT * from tbl_user where username = '$user_check'");

    $row = mysqli_fetch_array($ses_sqli,MYSQLI_ASSOC);


    if(!isset($_SESSION['username'])){
        header("Location: index.php");
   
}
} else {
        header("Location: index.php");
}
?>

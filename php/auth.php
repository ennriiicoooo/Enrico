<?php
session_start();

include('config.php');


if(isset($_POST['submit'])){

    $myusername = $_POST['username'];
    $mypassword = $_POST['password'];

    $sql = "SELECT * FROM tbl_user WHERE username = '$myusername' and password = '$mypassword' ";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if($count > 0){

        $_SESSION['username'] = $myusername;
        ?>

        <script>
            alert("Login Successfully");
            window.location.href='index.html';
        </script>

        <?php


        

    }
else {
        ?>

        <script>
            alert("Your username or password are incorrect");
            window.location.href='index.php';
        </script>

        <?php

      

        if(!$result) {die('Unsuccessfull added'. mysql_error()); } 

        
    }
} else {

    ?>

    <script>
        alert("Your username and password is EMPTY");
        window.location.href='index.php';
    </script>

    <?php

    if(!$result) {die('Unsuccessfull added'. mysql_error()); } 

    header("location:index.php");
}


mysqli_close($conn);
?>
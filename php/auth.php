<?php
session_start();

include('config.php');


if(isset($_POST['submitt'])){

    $myusername = $_POST['username'];
    $mypassword = $_POST['password'];

    $sql = "SELECT * FROM tbl_user WHERE username = '$myusername' and password = '$mypassword' ";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    

    if($count > 0){
        if($row['active'] == 1){

        $_SESSION['username'] = $myusername;
        ?>

        <script>
            alert("Login Successfully");
            window.location.href='home.php';
        </script>

        <?php
        }else{
            ?>

        <script>
            alert("Your account is currently Deactivated");
            window.location.href='index.php';
        </script>

        <?php
        }
    }
else {
        ?>
    
        <script>
            alert("Your Username or Password is incorrect");
            window.location.href='index.php';
        </script>

        <?php

        



        if(!$result) {die('Unsuccessfull added'. mysql_error()); } 

    
    }
} else {

    ?>

    <script>
    alert("Your username and password is empty");
    </script>

    <?php

    if(!$result) {die('Unsuccessfull added'. mysql_error()); } 

    header("location:login.php");
}

mysqli_close($conn);
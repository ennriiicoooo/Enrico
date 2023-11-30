<?php
session_start();

if(session_destroy())
{
    ?>

        <script>
            alert("Successfully Logout!");
            window.location.href='home.php';
        </script>

        <?php


}
?>
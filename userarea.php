<?php
    include('header.php');
    session_start();
    if(empty($_SESSION['uid'])){
        header("location: login.php");
    }
    ?>
    </body>
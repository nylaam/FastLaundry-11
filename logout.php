<?php
    session_start();

    session_destroy();
    $_SESSION['status_login']=false;//!=true
    header('location: login.php');
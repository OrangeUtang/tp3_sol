<?php
    session_start();

    require_once __DIR__ . "/../utilities/sessiontools.php";

    $logged = is_logged();

    // if is not loged sends to login page
    if(!$logged){
        header('Location: login.php?errmsg=Login required');
    }
    // if is logged, sends to logout page
    else{

        $_SESSION = [];
        unset($_COOKIE["PHPSESSID"]);
        session_destroy();
        
        header('Location: ../user/logout.php');
    }

die();

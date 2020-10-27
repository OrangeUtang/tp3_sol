<?php
    session_start();

    require_once __DIR__ . "/../utilities/sessiontools.php";
    require_once __DIR__ . "/../utilities/validator.php";
    require_once 'userDataGateWay.php';

    $logged = is_logged();

    if($logged){
        header('Location: ../error.php?errmsg=Already logged');
        die();
    }

    // required
    require_once 'userDataGateWay.php';

    // required params 
    $required_post = ['username', 'password'];

    // parameter check
    validate_post_param($required_post);

    $name = $_POST['username'];
    $pw = $_POST['password'];

    $current_user = verify_login($name, $pw);

    if(!$current_user || !isset($current_user)){
        header("Location: ../user/login.php?errmsg=Invalid");
    }
    else{
        $_SESSION['userID'] = $current_user[0];
        $_SESSION["username"] = $current_user[1];
        header("Location: ../user/listAllUsers.php");
    }
    die();
    







<?php
    session_start();

    // required
    require_once 'userDataGateWay.php';
    require_once __DIR__ . "/../utilities/validator.php";
    require_once __DIR__ . "/../utilities/sessiontools.php";

    //fonction from sessiontool
    $logged = is_logged();

    if($logged){
        header('Location: ../error.php?errmsg=Already logged');
        die();
    }

    // required params 
    $required_post = ['username', 'email', 'password', 'confirmpassword'];

    validate_post_param($required_post);

    $name = $_POST['username'];
    $email = $_POST['email'];
    $pw = $_POST['password'];
    $cpw = $_POST['confirmpassword'];

    // SERVER SIDE VERIFICATION
    $unique_ver = verify_unique($name, $email);

    // ADD VALIDATION PW == CPW
    if($pw != $cpw){
        header("Location: ../user/register.php?errmsg=confirm password do not match password");
        die();
    }

    // VALIDATE EMAIL
    if(!validate_email($email)){
        header("Location: ../user/register.php?errmsg=Invalid Email");
        die();
    }

    // ADD PW VALIDATION (AT LEAST 1 NUMBER, 1 LETTER, 1 SPECIAL CHAR)
    if(!validate_password($pw)){
        header("Location: ../user/register.php?errmsg=Invalid Password");
        die();
    }

    if($unique_ver){
        header("Location: ../user/register.php?errmsg=Email or username is already used");
    }
    else{
        insert_user($name, $email, $pw, false);
        header("Location: ../user/login.php");
    }
    die();
    
?>
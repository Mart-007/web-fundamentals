<?php
    session_start();
    $errors = array();
    $msgs = "";
    $nameErr = "";

    if(empty($_SESSION['fname'])){
        $msgs = "This is required";   
    } else {
        if (!preg_match("/^[a-zA-Z-' ]*$/",$msgs)) {
            $nameErr = "Only letters and white space allowed";
          }     
    }
    if(empty($_SESSION['lname'])){
        $msgs = "This is required";   
    } else {
        if (!preg_match("/^[a-zA-Z-' ]*$/",$msgs)) {
            $nameErr = "Only letters and white space allowed";
          }     
    }
    if(isset($_SESSION['email']) &&  $_SESSION['email'] != null ){
        if(! filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL)){
            $errors[] = "This email is not valid";
        }
    }   else {
            $errors[] = "Email should not be empty";
    }
    if(empty($_SESSION['password'])){
        $msgs = "This is required";
    }
    if(empty($_SESSION['cpassword'])){
        $msgs = "This is required";
    }
    if($_SESSION['password'] != $_SESSION['cpassword']){
        $msgs = "The password should be match";
    }
    if(empty($_SESSION['bdate'])){
        $msgs = "this is required";
    }

    header('Location: checkout.php');

?>

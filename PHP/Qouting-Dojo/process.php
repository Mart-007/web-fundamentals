<?php
    require("./PHP/Database-Connection/db-connection.php");
    global $connection;
    session_start();
    $errors = array();

    if(isset($_POST['action']) && $_POST['action'] = "add"){
        if(strlen($_POST['name'] < 1)){
            $errors[] = "Name cannot be empty";
        }
        if(strlen($_POST['qoute'] < 1)){
            $errors = "Qoutes cannot be empty";
        }
        if(count($errors) > 0){
            $_SESSION['errors'] = $errors;
            header("Location: index.php");
            die();
        }
        else {
            $skip_name = mysqli_real_escape_string($connection, $_POST['name']);
            $skip_qoute = mysqli_real_escape_string($connection, $_POST['qoute']);
            $date = date('g:i a F J Y');
            $insert_query = "INSERT INTO qouting_dojo (name, qoute, created_at)
                             VALUES ('{$skip_name}', '{$skip_qoute}', '{$date}')";
            run_mysql_query($insert_query);
            
            $select_query = "SELECT * FROM qouting_dojo";
            $qoute = fetch_all($select_query);
            header('Location: main.php');

            if(!empty($qoute)){
                $_SESSION['qoute_entered'] = $qoute;
                header('Location: main.php');
            }
        }
    }

    if(isset($_POST['action']) && $_POST['action']=="skip"){
        header('Locatio: main.php');
    }
    if(isset($_POST['action']) && $_POST['action'] == "goback"){
        header('Location: index.php');
        die();
    }
?>
<?php
    require("db-connection.php");
    session_start();

    if(isset($_POST['action']) && $_POST['action'] == "register"){
        user_register($_POST);
    }
    elseif(isset($_POST['action']) && $_POST['action'] == "login"){
        user_login($_POST);
    }
    else
    {
        session_destroy();
        header('Location: index.php');
        die();
    }
    function user_register($post){
        $_SESSION['errors'] = array();
        if(empty($post['f_name'])){
            $_SESSION['errors'][] = "First name should not be empty";
        }
        if(empty($post['l_name'])){
            $_SESSION['errors'][] = "Last name should not be empty";
        }
        if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)){
            $_SESSION['errors'][] = "Please enter a valid email";
        }
        if($post['password'] !== $post['c_password']){
            $_SESSION['errors'][] = "Password should match";
        }

        if(count($_SESSION['errors'] > 0)){
            header('Location: index.php');
            die();
        }
        else
        {
            $query = "INSERT INTO users_info (first_name, last_name, email, password, created_at, updated_at)
                    VALUES ('{$post['f_name']}', '{$post['l_name']}', '{$post['email']}', '{$post['password']}', NOW(), NOW())";
            run_mysql_query($query);
            $_SESSION['message'] = "User succesfully created!";
            header('Location: index.php');
            echo $query;
            die();
        }
        
    }
   
    function user_login($post)
    {
        $query = "SELECT * FROM users_info WHERE users_info.password = '{$post['password']}'
                  AND users_info.email = '{$post['email']}'";
        $user = fetch_all($query);
        if(count($user) > 0)
        {
            $_SESSION['user_id'] = $user[0]['id'];
            $_SESSION['first_name'] = $user[0]['first_name'];
            $_SESSION['logged_in'] = TRUE;
        }
        else{
            echo "can't find a user, please try again!";
        }
    }
?>
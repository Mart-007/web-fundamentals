<?php
  require('db-connection.php');
  session_start();

    if(isset($_POST['action']) && $_POST['action'] == 'register'){
        $_SESSION['errors']= array();
        $num_errors = 0;
        if(is_numeric($_POST['fname']) || strlen($_POST['fname']) < 3 ){
            $_SESSION['errors'][] = "Please enter a correct first name";
            $num_errors++;
        }
        if(is_numeric($_POST['lname']) || strlen($_POST['lname']) < 3 ){
            $_SESSION['errors'][] = "Please enter a correct last name";
            $num_errors++;
        }
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $_SESSION['errors'][] = "Please enter a valid email";
            $num_errors++;
        }
        if($_POST['password'] !== $_POST['cpassword']){
            $_SESSION['errors'][] = "Password should be match";
            $num_errors++;
        }
        //------End of validation ------------------------------->>>>>
        if($num_errors == 0){
            $fname  = escape_this_string($_POST['fname']);
            $lname  = escape_this_string($_POST['lname']);
            $email  = escape_this_string($_POST['email']);
            $salt   = bin2hex(openssl_random_pseudo_bytes(22));
            $pwd    = escape_this_string($_POST['password']);
            $hash   = crypt($pwd, $salt);

            $query  = "INSERT INTO users_info ( first_name, last_name, email, password, created_at, updated_at)
                       VALUES ('{$fname}', '{$lname}', '{$email}', '{$hash}', NOW(), NOW())";
           $results = run_mysql_query($query);
            if($results>0){
                $user_id = $results;
                $_SESSION['user_id'] = $user_id;
                $_SESSION['fname'] = $_POST['fname'];
                $_SESSION['message'] = "User succesfully created!";
                header('Location: index.php');
                die();
            }
            else{
                $_SESSION['errors'][] = "There was an error, please try again!";
                
            }
        }
        header('location: index.php');
        die();
        //-------End of query for registration------------------------->>>>>

    } elseif(isset($_SESSION['action']) && $_POST['action'] = 'login'){
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $_SESSION['errors'][] = "Please enter a valid email";
            $num_errors++;
        }
        if(empty($_POST['password'])){
            $_SESSION['password'][] = "Please enter a correct password";
        }
        if($num_errors == 0){
            $query = "SELECT * FROM users_info WHERE email = '{$_POST['email']}'";
            $results = fetch_all($query);
            if($results !== 0){
                if(crypt($_POST['passwrod'], $results['password']) == $results['password']){
                    $_SESSION['user_id'] = $results['id'];
                    $_SESSION['first_name'] = $results['first_name'];
                    header('location: wall.php?id='.$results['id']);
                    die();
                }
                else{
                    $_SESSION['errors'][] = "Invalid email or password, please try again!";
                }
            }

        }
        header('location: index.php');
        die();
        //-----------End of login validation--------------------->>>>>>
    } elseif(isset($_GET['logout'])){
        $_SESSION['errors'][] = 'You logged out!';
        header('location: index.php');
        die();
    } elseif(!empty($_POST['action']) && $_POST['action'] == 'message'){
        if(strlen($_POST['mes']) > 0){
            $msg = escape_this_string($_POST['mes']);
            $query = "INSERT INTO messages (user_id, message, created_at, updated_at)
                      VALUES ('{$_SESSION['user_id']}', '{$msg}', NOW(), NOW())";
                      $results = run_mysql_query($query);
                      if($results == 0){ 
                          $_SESSION['errors'][] = "Error, please try again!";
                      } else{
                          $_SESSION['messages'][] = "Please enter a valid message.";
                      }  
                      header('location: wall.php');
                      die();

        }
    } elseif(!empty($_POST['action']) && $_POST['action'] == 'comment'){
        if(strlen($_POST['comment'])>0){
            $comm = escape_this_string($_POST['comment']);
            $query = "INSERT INTO comments (message_id, user_id, comment, created_at, updated_at)
                      VALUES ('{$_POST['m_id']}', '{$_SESSION['user_id']}', '{$comm}', NOW(), NOW())";
            $result = run_mysql_query($query);
            if($result != 0){
                unset($_SESSION['message_id']);
                header('location: wall.php');
                die();
            } else{
                $_SESSION['errors'][] = "Error, please try again!";
            }
        } elseif(!empty($_GET['m_id'])){
            $query = "DELETE FROM messages WHERE id=".$_GET['m_id']."";
            $results = run_mysql_query($query);
            header('location: wall.php');
            die();
        }
    }


?>
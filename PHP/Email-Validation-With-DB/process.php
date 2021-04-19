 <?php
  require('db-connection.php');
   session_start();

   if(isset($_POST['submit'])){
        $_SESSION['valid'] = $valid;
        $_SESSION['message'] = $message;
        $email = $_POST['email'];
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $query = "INSERT INTO records (email, created_at) VALUES ('{$email}', NOW())";
            run_mysql_query($query);
            $valid = "yes";
            $message = "<p> The email address you entered ({$email}) is a VALID email address! Thank you!";
            header('Location: sucess.php');
        }else {
            $valid = "not";
            $message = "<p> The email address you entered ({$email} is not VALID)";
            header('Location: index.php');
        }
   }

?>
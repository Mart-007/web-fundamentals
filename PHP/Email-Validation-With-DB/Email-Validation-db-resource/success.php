<?php
	require("db-connection.php");
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Success</title>
    </head>
    <body>
        <div class="container">
    <?php  
            if(isset($_SESSION['message']) and ($_SESSION['valid'] == 'yes'))
            {
                echo "<div class='success'>" . $_SESSION['message'] . "</div>";
                unset($_SESSION['message']);

            }
            echo "<h2>Email Addresses Entered:</h2>";
            $query = "SELECT * FROM users";
            $users = fetch_all($query);
            // var_dump($users);

            foreach ($users as $user) 
            {  
    ?>
            <form action='processs.php' method='post'>
    <?php 
            echo "<form action='processs.php' method='post'>" . $user['email'] . " - " . 
                date('m/d/y h:i A', strtotime($user['created_at']));
    ?>
                <input type='hidden' name='id' value= '<?= $user['id'] ?>' >
                <input type='submit' 
                    onclick="return confirm('Are you sure you want to delete this email address (<?= $user['email'] ?>)?')"
                    name='delete' value='Delete'>
                <br>
            </form>
    <?php
            }
    ?>
        </div>
    </body>
</html>
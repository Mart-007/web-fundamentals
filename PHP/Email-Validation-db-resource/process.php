  
<?php  
	require("db-connection.php");
	session_start();

	if(isset($_POST['submit']))
	{
		$email = $_POST['email'];
		if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$query = "INSERT INTO users (email, created_at) VALUES ('{$email}', NOW())";
			run_mysql_query($query);
			$valid = "yes";
			$message = "The email address you entered (" . $email . ") is a VALID email address!  Thank you!";
			header("location: successs.php");
		}
		else
		{
			$valid = "no";
			$message = "The email address you entered (" . $email . ") is NOT a valid email address!";
			header("location: index1.php");
		}
		$_SESSION['valid'] = $valid;
		$_SESSION['message'] = $message;
	}

	if(isset($_POST['delete']))
	{
		$id = $_POST['id'];
		$query = "DELETE FROM users WHERE id='{$id}'";
		run_mysql_query($query);
		header("location: successs.php");
	}
?>
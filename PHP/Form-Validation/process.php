<?php 
    session_start();
    $errors = array();
    if(isset($_POST['email']) &&  $_POST['email'] != null ){
        if(! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $errors[] = "This email is not valid";
        }
    } else {
        $errors[] = "Email should not be empty";
    }

    if(! empty($errors)){
        $_SESSION['errors'] = $errors;
        header('Location: index.php');
    } else {
        echo "YOUR ARE LOGGED IN";
    }

?>

<?php
session_start();
if(isset($_POST['action']) && $_POST['action'] == 'register')
{
     $errors = array();
     //empty array to collect errors
     if(empty($_POST['name']))
     {
         $errors[] = "name cannot be blank";
     }
     if(empty($_POST['city']))
     {
         $errors[] = "city cannot be blank";
     } 
     if(count($errors) > 0)
     {
         //if there are errors, assign the session variable!
         $_SESSION['errors'] = $errors;
         //redirect your user back using header('location: ')
     }
     else
     {
         $_SESSION['success'] = "Your information was valid!";
         //redirect your user to the next part of the site!
     }
}



?>
<?php
    session_start();
    date_default_timezone_set("Asia/Manila");
    $activities ='';
    $gold = 0;

    if(isset($_POST['action']) && $_POST['action'] =='farm'){
        $gold = rand(10, 20);
        $_SESSION['gold'] = $_SESSION['gold'] + $gold;
        $activities = "<p class='green'> Your entered a farm and earned " . $gold . " golds. (" . date("M-d-Y h:i:sa") . ")</p>";
    }
    else if(isset($_POST['action']) && $_POST['action'] =='cave'){
        $gold = rand(5, 10);
        $_SESSION['gold'] = $_SESSION['gold'] + $gold;
        $activities = "<p class='green'> Your entered a cave and earned " . $gold . " golds. (" . date("M-d-Y h:i:sa") . ")</p>";
    }
    else if(isset($_POST['action']) && $_POST['action'] =='house'){
        $gold = rand(2, 5);
        $_SESSION['gold'] = $_SESSION['gold'] + $gold;
        $activities = "<p class='green'> Your entered a couse and earned " . $gold . " golds. (" . date("M-d-Y h:i:sa") . ")</p>";
    }
    else if(isset($_POST['action']) && $_POST['action'] =='casino'){
        $gold = rand(-50, 50);
        $_SESSION['gold'] = $_SESSION['gold'] + $gold;
        if($gold>0){
            $activities = "<p class='green'> Your entered a casino and earned " . $gold . " golds. (" . date("M-d-Y h:i:sa") . ")</p>";
        } else if($gold < 0){
            $activities = "<p class='red'>You entered a casino " . abs($gold) . " golds. Ouch.. (" . date("M-d-Y h:i:sa") . ")</p>";
        }
    }
    $_SESSION['activities'] = $activities;
    header('Location: index.php');
    
?>
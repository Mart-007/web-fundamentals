<?php
$users = array("first_name" => "Michael", "last_name" => "Choi");

function user_list($arr){
    foreach($arr as $key => $value){
        echo "The value in the key", ' ' . $key .' ', " is ", ' ' . $value, "<br />";
    }
}
user_list($users);

?>
<?php 
    $first_name = 'Mart';
    $roles = array('guest', 'member', 'admin');
    $role = 0;

    switch($first_name)
    {
        case 'Mart':
        $role = 2;
        break;
        case 'Raylene':
        $role = 1;
        break;
        case 'Reymart':
        $role = 1;
        break;
    }
    echo "Hello $first_name ! Your role is $roles[$role]";

    //shortcut for role 1
//     switch($first_name)
// {
//     case 'Tom':
//     case 'Severus':
//         $role = 1;
//     break;
//     case 'Oliver':
//         $role = 2;
//     break;
// }
// Another Approach
//switch($first_name)
// {
//     case 'Tom':
//     case 'Severus':
//         $role = 1;
//     break;
//     case 'Oliver':
//         $role = 2;
//     break;
//     default:
//         $role = 0;
//     break;
// }
// ==	is equal to	comparison	$x == $y
// !=	is not equal to	comparison	$x != $y
// <	less than	comparison	$x < $y
// >	greater than	comparison	$x > $y
// <=	less than
// or equal to	comparison	$x <= $y
// >=	greater than
// or equal to	comparison	$x >= $y
// !	not	logical	!$x
// &&
// AND	and	logical	$x && $y
// $x AND $y
// ||
// OR	or	logical	$x || $y
// $x OR $y

?>
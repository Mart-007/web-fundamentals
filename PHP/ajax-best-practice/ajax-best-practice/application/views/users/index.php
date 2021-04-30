<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>All Users</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css'); ?>">
    <script></script>
</head>
<body>
    <h1><span class="count"></span> Users</h1>

    <form action="<?=base_url('users/');?>" method="POST">
        <!-- Gender -->
        <label for="male"><input type="checkbox" name="gender[]" value="M" id="male">Male</label>
        <label for="female"><input type="checkbox" name="gender[]" value="F" id="female">Female</label>
        <!-- Country -->
        <label for="country">Show users in: 
            <select name="country">
                <option value="0" selected>All Countries</option>
                <option value="1" selected>U.S.A</option>
                <option value="2" selected>Philippines</option>
                <option value="3" selected>India</option>
                <option value="4" selected>Korea</option>
            </select>
        </label>
        <!-- Temporary Button -->
        <input type="submit"/>
    </form>
    <!-- Display Data -->
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Country</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Aga Muhlach</td>
                <td>51</td>
                <td>M</td>
                <td>Philippines</td>
            </tr>
            <tr>
                <td>Amir Khan</td>
                <td>56</td>
                <td>M</td>
                <td>India</td>
            </tr>
            <tr>
                <td>Angel Locsin</td>
                <td>36</td>
                <td>F</td>
                <td>Philippines</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
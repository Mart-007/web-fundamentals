<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Village Exam</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="../../../assets/css/style.css">
</head>
<body>
    <div class="container" style="margin-top: 120px;">
        <div class="header">
            <h3 class="count">Users</h3>
            <form action="<?=base_url('users/index')?>" method="post"></form>
            <input type="checkbox" name="gender[]" value="M"> Male
            <input type="checkbox" name="gender[]" value="F"> Female
            <select name="country" id="country">
<?php       foreach($countries as $country){ ?>  
            <option value="<?= $country['id']?>"><?=$country['name']?></option> 
            <!-- <option value="0">All countries</option>
                <option value="1">USA</option>
                <option value="2">Korea</option>
                <option value="3">Philippines</option>
                <option value="4">China</option> -->
<?php     } ?>
            </select>
                <input type="submit" class="btn2" id="load_more" data-val = "0" value="Update">
        </div>
        <table class="table" id="table_val">
            <thead>
                <tr class="th">
                    <td>Name</td>
                    <td>Age</td>
                    <td>Gender</td>
                    <td>Country</td>
                </tr>
            </thead>
            <tbody> 
                <?php
                    foreach($users as $user){ 
                        ?><tr>
                            <td><?php echo $user['first_name']. ' ' . $user['last_name'];?></td>
                            <td class="gray"><?php echo $user['age'];?></td>
                            <td><?php echo $user['gender'];?></td>
                            <td class="gray"><?php echo $user['country'];?></td>
                         </tr>                       
                   <?php }
                    ?> 
            </tbody>
        </table>
        <form action="Users/add_users" method='post'>
            <input type="submit" class="btn" id="load_more" data-val = "0" value="Show More">
            <input type="hidden" name="show" value="show"/>
        </form>    
    </div>
 </div>
</body>
</html>
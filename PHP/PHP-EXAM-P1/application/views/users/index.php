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
    <h1>Users</h1>
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

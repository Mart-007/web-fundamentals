<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Village Exam</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <script>
        $(document).ready(function(){
            $(document).on('submit', 'form', function(){
                $.post($(this).attr('action'), $(this).serialize(), function(res){
                    $('tbody').html(res.records);
                    $('s').html(res.count);
                }, 'json');
                return false;
            });
            $(document).on('change', 'select, input[type="checkbox"]', function(){
                $(this).parent().submit();
            });
            $('form').submit();
        });
    </script>
</head>
<body>
    <div class="container" style="margin-top: 120px;">
        <div class="header">
            <h3 class="count">Users</h3>
            <form action="<?=base_url('users/filter')?>" method="POST">
            <input type="checkbox" name="gender[]" value="M"> Male
            <input type="checkbox" name="gender[]" value="F"> Female

            <select name="country" id="country">
                <option value="0">All Countries</option>
<?php       foreach($countries as $country){ ?>  
            <option value="<?= $country['id']?>"><?=$country['name']?></option> 
<?php     } ?>
    <input type="submit" class="btn2" id="load_more" data-val = "0" value="Update">

        </form>
            </select>
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
            </tbody>
        </table>
        <!-- <form action="Users/add_users" method='post'>
            <input type="submit" class="btn" id="load_more" data-val = "0" value="Show More">
            <input type="hidden" name="show" value="show"/>
        </form>     -->
    </div>
 </div>
</body>
</html>
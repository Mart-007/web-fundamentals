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
    <script>
        //baseURL variable
        var baseURL = "<?php base_url();?>";
        $(document).ready(function(){
            //country change
            $('#country').change(function(){
                var country = $(this).val();

                //AJAX request
                $.ajax({
                    url:'<?=base_url()?>http://localhost:8080/GetUsers/',
                    method: 'post',
                    data: {country: country},
                    dataType: 'json',
                    success: function(response){
                        
                        //Add options
                        $.each(response, function(index, data){
                            $('#country').append('<option value="'+data['id']+'"></option>')
                        });
                    }
                });
            });
        })
    </script>
    <style>
        .header{
            margin-left: 400px;
            display: inline-block;
           
        }
        h3{
            margin-right: 100px;
            display: inline-block;
            font-family: arial;
        }
        select{
            margin-right: 50px;
            display: inline-block;
        }
        table{
            margin-top: 50px;
            margin-left: 400px;
        }
        .th{
            padding: 30px;
            font-family: arial;
            font-weight: bold;
            }
        td{
            border: 1px solid black;
            margin-right: 50px;
            padding: 10px;
        }
        .btn{
            background-color:#00e673;
            border: none;
            border-radius: 3px;
            padding: 10px;
            font-weight: bold;
            cursor: pointer;
            display: inline-block;
            }
        .gray{
            background-color: #66ccff;
        }
  </style>
</head>
<body>
    <div class="container" style="margin-top: 120px;">
        <div class="header">
            <h3>Users</h3>
            <input type="checkbox" name="male"> Male
            <input type="checkbox" name="female"> Female
            <select name="country" id="country">
                <option value="all_countries">All countries</option>
                <?php
                    foreach($data as $country){
                        echo "<option value='".$country['id']."'>"."</option>";
                    }
                ?>
                <!-- <option value="USA">USA</option>
                <option value="USA">Korea</option>
                <option value="USA">Philippines</option>
                <option value="USA">China</option> -->
            </select>
            <!-- <input type="submit" class="btn" id="load_more" data-val = "0" value="Update"> -->
        </div>
        <table class="table">
            <tbody>
                
                    <tr class="th">
                        <td>Name</td>
                        <td>Age</td>
                        <td>Gender</td>
                        <td>Country</td>
                    </tr>
                        <?php
                            foreach($data->result() as $row){
                                ?><tr>
                                <td><?= $row->name;?></td>
                                <td class="gray"><?= $row->age;?></td>
                                <td><?= $row->gender;?></td>
                                <td class="gray"><?= $row->country;?></td>
                        <?php  }
                    ?>
                
            </tbody>
        </table>
    <div class="container" style="text-align: center">
    </div>
    </div>
 </div>
</body>
</html>

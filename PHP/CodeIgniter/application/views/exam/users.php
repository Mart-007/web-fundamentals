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

        $(document).ready(function(){
            $('#country').change(function(){
                // let n = $(this).val();
                // console.log(n);
                table_val();
            });
        });

        function get_country_n(){
            var country = $('#country').val();
            $.ajax({
                url: "<?= base_url('GetUsers/get_country')?>",
                data: "country=" + country,
                success: function(data){
                //     // $("#table tbody").html('<tr><td> THis is data </td></tr>')
                // console.log(data);
                $('#table_val tbody').html(data);
                }
            });
        }
        // baseURL variable
        var baseURL = "<?php base_url();?>";
        $(document).ready(function(){
            //country change
            $('#country').change(function(){
                var country = $(this).val();

                //AJAX request
                $.ajax({
                    url:'<?=base_url()?>/GetUsers/get_country',
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
        .container{
            margin-left: 600px;
            width: 700px;
            background-color: #85e0e0;
        }
        body{
            background-color: #47d1d1;
        }
        .header{
            margin-left: 100px;
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
            margin-left: 190px;
            margin-bottom: 20px;
            border-collapse: collapse;
        }
        .th{
            padding: 10px;
            font-family: arial;
            font-weight: bold;
            }
        td{
            font-family: Arial, Helvetica, sans-serif;
            padding: 5px;
            border: 1px solid #dddddd;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
            }
            /* td{
            border: 1px solid black;
            margin-right: 50px;
            padding: 10px;
        } */
        .btn{
            background-color:#00e673;
            border: none;
            border-radius: 3px;
            padding: 10px;
            font-weight: bold;
            cursor: pointer;
            display: inline-block;
            }
        /* .gray{
            background-color: #66ccff;
        } */
  </style>
</head>
<body>
    <div class="container" style="margin-top: 120px;">
        <div class="header">
            <h3>Users</h3>
            <input type="checkbox" name="male"> Male
            <input type="checkbox" name="female"> Female
            <select name="country" id="country">
                <option value="0">All countries</option>
                <option value="1">USA</option>
                <option value="2">Korea</option>
                <option value="3">Philippines</option>
                <option value="4">China</option>
            </select>
            <input type="submit" class="btn" id="load_more" data-val = "0" value="Update">
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
                    foreach($data->result() as $row){ 
                        ?><tr>
                            <td><?php echo $row->name;?></td>
                            <td class="gray"><?php echo $row->age;?></td>
                            <td><?php echo $row->gender;?></td>
                            <td class="gray"><?php echo $row->country;?></td>
                         </tr>
                        
                   <?php }
                    ?> 
            </tbody>
        </table>
    <div class="container" style="text-align: center">
    </div>
    </div>
 </div>
</body>
</html>

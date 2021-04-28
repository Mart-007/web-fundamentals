<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination</title>
</head>
<body>
    <?php
        // Connect to database
        $con = mysqli_connect('localhost', 'root', '1234');
        mysqli_select_db($con, 'users');

        //define how many results you want per page
        $results_per_page = 10;

        //find out the number of results stored in database
        $sql = "SELECT * FROM all_users";
        $result = mysqli_query($con, $sql);
        $number_of_results = mysqli_num_rows($result);

        while ($row = mysqli_fetch_array($result)){
            echo $row['id'] . ' ' . $row['all_users'] . '<br>';
        }

        //determine number of total pages available
        echo $number_of_pages = $number_of_results/$results_per_page;
    ?>
</body>
</html>

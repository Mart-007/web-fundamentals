<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV</title>
</head>
<body>
    <?php ini_set('auto_detect_line_endings', true); 
        $count = 0;
        $records = fopen("record.csv", "r");
        $us_list = fgetcsv($records, 1000, ",");
        while (($us_list = fgetcsv($records, 1000, ",")) !== false) {
            $count +=1 ?>
            <h1>Record <?= $count ?></h1>
                <ul>
    <?php   for($i = 0; $i<count($us_list); $i++) { ?>
                <li><?= $us_list[$i] . ":" . $us_list[$i] ?></li>

    <?php  } ?>
            </ul>
        
        
    <?php }  fclose($records); ?>
        
</body>
</html>
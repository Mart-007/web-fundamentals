<?php
    require("db-connection.php"); 
    $query = "DELETE FROM people WHERE id=12";
    $people = run_mysql_query($query);
    var_dump($people);

//Inserting new records
    // process.php
// include connection page
require_once('new-connection.php');
// Add validations here to make sure information is correct
// if validations pass, we insert the records into the database
$query = "INSERT INTO interests (music_id, color, file_path, created_at, updated_at)
          VALUES('{$_POST['music_id']}','{$_POST['color']}','{$file_path}', NOW(), NOW())";
if(run_mysql_query($query))
{
    $_SESSION['message'] = "New Interest has been added correctly!";
}
else
{
    $_SESSION['message'] = "Failed to add new Interest"; 
}
header('Location: index.php');

//RETRIEVING SINGLE RECORD
require_once('new-connection.php');
// get a single record from the interests table joining musicscopy
$query = "SELECT interests.color, musics.name AS music, interests.file_path 
          FROM interests
          LEFT JOIN musics ON interests.music_id = musics.id LIMIT 1";
// since we've included the connection page, we can use the $connection variable
$result = fetch_record($query);

//RETRIEVING MULTIPLE RECORDS
$query = "SELECT interests.color, musics.name AS music, interests.file_path 
          FROM interests
          LEFT JOIN musics ON interests.music_id = musics.id";
$results = fetch_all($query);
foreach($results as $row)
{
?>
    <div>
      <h3>Favorite Color: <?= $row['color'] ?></h3>
      <h3>Favorite Music Type: <?= $row['music'] ?></h3>
      <img src="<?= $row['file_path'] ?>">
    </div>
<?php
}



?>
<!-- RETRIVING SINGLE RECORD-->
    <div>
      <h3>Favorite Color: <?= $result['color'] ?></h3>
      <h3>Favorite Music Type: <?= $result['music'] ?></h3>
      <img src="<?= $result['file_path'] ?>">
    </div>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
   
</body>
</html>

<?php   
   $users = array( 
        array('first_name' => 'Michael', 'last_name' => 'Choi'),
        array('first_name' => 'John', 'last_name' => 'Supsupin'),
        array('first_name' => 'Mark', 'last_name' => 'Guillen'),
        array('first_name' => 'KB', 'last_name' => 'Tonel') 
   )
    ?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML TABLE</title>
    <style>
    table, th, td{
        border: solid black 1px;
        border-collapse: collapse;
        padding: 5px;
    }
    
</style>
</head>
<body>
<?php if (count($users) > 0): ?>
<table>
  <thead>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($users))); ?></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($users as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>
    <!-- <table>
        <tr>
            <th>User #</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Full Name</th>
            <th>Full Name In upper case</th>
            <th>Length of full name (without spaces)</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Michael</td>
            <td>Choi</td>
            <td>Michael Choi</td>
            <td>MICHAEL CHOI</td>
            <td>11</td>
        </tr>
        <tr>
            <td>2</td>
            <td>John</td>
            <td>Supsupin</td>
            <td>John Supsupin</td>
            <td>JOHN SUPSUPIN</td>
            <td>12</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Marc</td>
            <td>Guillen</td>
            <td>Marc Guillen</td>
            <td>MARC GUILLEN</td>8
            <td>11</td>
        </tr>
        <tr>
            <td>4</td>
            <td>KB</td>
            <td>Tonel</td>
            <td>KB Tonel</td>
            <td>KB TONEL</td>
            <td>7</td>
        </tr>

    </table> -->
</body>
</html> 
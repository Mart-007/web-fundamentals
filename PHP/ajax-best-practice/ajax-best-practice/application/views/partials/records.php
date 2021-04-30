<?php   
    foreach($users as $user){   ?>
        <tr>
            <td><?= $user['first_name'].' '.$user['last_name']; ?></td>
            <td><?= $user['age']; ?></td>
            <td><?= $user['gender']; ?></td>
            <td><?= $user['name']; ?></td>
        </tr>
<?php  } ?>
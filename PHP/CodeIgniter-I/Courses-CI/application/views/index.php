<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course</title>
    <link rel="stylesheet" href="../../assets/css/course.css">
</head>
<body>
    <div class="container">
    <h1>Add a new course</h1>
    <?php if(!empty($error)) { ?>
        <p><?= $error; ?></p>
    <?php } ?>
        <form action="courses/add" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" class="name"><br><br>
            <label for="description">Description:</label> 
            <textarea name="description" id="desc" cols="40" rows="5"></textarea><br>
            <input type="submit" class="btn" value="Add" />
        </form>
    </div>
    
    <div class="content">
    <h1>Courses</h1>
        <table>
            <thead>
                <th>Course Name</th>
                <th>Description</th>
                <th>Date Added</th>
                <th>Actions</th>
            </thead>
<?php foreach($courses as $course) { ?>
            <tbody>
                <tr>
                    <td><?= $course['name']; ?></td>
                    <td><?= $course['description']; ?></td>
                    <td><?= $course['date_created']; ?></td>
                    <td><a href="/courses/destroy/<?= $course['id']?>"> Remove </a></td>
                </tr>
<?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html> 
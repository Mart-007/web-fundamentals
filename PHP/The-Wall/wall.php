<?php
    require('db-connection.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The wall Homepage</title>
    <link rel="stylesheet" href="wall.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>CodingDojo Wall</h1>
<?php   if(isset($_SESSION['f_name']) && isset($_SESSION['user_id'])){?>
            <p>Welcome! <?= $_SESSION['f_name']?></p>
            <a href="">Log off</a>
        </div>
        <form action="process.php" method="post">
            <h2>Post a message</h2>
            <input type="hidden" name="message" value="message">
            <textarea name="message_input" id="message" cols="112" rows="7"></textarea><br>
            <input type="submit" class="submit_btn" value="Post message"> 
        </form>
<?php   } else { ?>
        <p>Login to be able to post messages and comment</p>
		<a href="index.php">Login!</a>
<?php   }

        $query = "SELECT CONCAT_WS(' '. first_name, last_name) AS name, message, message.created_at AS dc, 
                        message.id AS message.id, message.user_id AS uid FROM messages 
                        LEFT JOIN users_info ON message.user_id = users_info.id ORDER BY message created_at DESC";
                        $results = fetch_all($query);
                        foreach($results as $result){
                            $m_id = $results['message_id']; ?>
                       
                        
 <?php  if(isset($_SESSION['fname']) && isset($_SESSION['user_id'])){
                        if($_SESSION['user_id'] == $results['uid']){
                            $delete = "<a href=process.php?m_id='{$m_id}'>Delete post</a>";
                            }
                        }?>
                        <h3><?= $results['name']. " - " .date('F jS Y', strtotime($results['dc']))?></h3>
<?php   if(isset($_SESSION['fname']) && isset($_SESSION['user_id'])){
                        if($_SESSION['user_id'] == $results['uid']){
                            $time = strtotime($results['dc']);
                            $cur_time = time();
                            if(($curtime-$time)>1800) {
                                echo '<a class="delete" href="process.php?mid='.$mid.'">Delete Post</a>'; 
                            }
                        }
                    }?>
                    <p><?= $result['message'] ?></p>
                    <!-- End of message query -->
                    
<?php   $query_2 = "SELECT CONCAT_WS(' ', first_name, last_name) AS nName,
                        DATE_FORMAT(comments.created_at, '%b %D %Y') AS cdc, comment FROM comments
                        LEFT JOIN users_info
                        ON comments.user_id = users.id
                        WHERE message_id='{$results['message_id']}'";
                    $results_2 = fetch_all($query_2);
                    foreach($results_2 as $results){ ?>
                    <h4><?= $results['nName'].' - '.$results['cdc']?></h4> 
                    <p><?= $results['comment'] ?></p>   
<?php               }
                        if(isset($_SESSION['fname']) && $_SESSION['user_id']) ?>
                    <form action="process.php" method="post">
                        <textarea class="commentText" name="comment"></textarea>
                        <input type="hidden" name="m_id" value="<?= $results['message_id'] ?>">
                        <input type="hidden" name="action" value="comment">
                        <input class="button posts" type="submit" name="submit" value="Add Comment!">
                    </form>
<?php               }  ?>                  

    </div>
    

</body>
</html>
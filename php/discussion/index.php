<?php
    
    $thisPage="Discussion Board";
//    include('../header.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/header.php');
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../stylesheets/screen.css">
        <link rel="stylesheet" type="text/css" href="../stylesheets/discussion-board.css">
        <title>Discussion Board</title>
        
    </head>
    <body>
        
        Content for discussion board page!
      
        <?php      
          if (array_key_exists('disc', $_GET)) {
              $reqId = htmlspecialchars($_GET["disc"]);
              echo $reqId;
            
              include '../connect.php';
 
              $sql = "SELECT discussionID, discussionTitle, discussionText, postDate 
                FROM discussion_board_posts
                WHERE discussionID=" . $reqId;
              $result = $conn->query($sql);
            
              $replySql = "SELECT discussionID, replyText, authorUsername, replyDate 
                FROM discussion_board_replies
                WHERE discussionID = " . $reqId;
              $replies = $conn->query($replySql);
            
              $row = $result->fetch_assoc();
              $date = new DateTime($row['postDate']);
              echo '<div class="forum-post-group">';
              echo '<div class="forum-title-group">';
              echo '<div class="forum-title">' . $row["discussionTitle"] . '</div>';
              echo '<div class="forum-date">' . $date->format("F j, Y") . '</div>';
              echo '</div>';
              echo '<div class="forum-preview">' . $row["discussionText"] . '</div>';
              echo '<div class="forum-replies">' . $replies->num_rows . ' Replies' . '</div>';
              echo '</div>';
            
              while($row = $replies->fetch_assoc()) {
                  $date = new DateTime($row['replyDate']);

                  echo '<div class="forum-post-group">';
                  echo '<div class="forum-title-group">';
                  echo '<div class="forum-title">' . $row["authorUsername"] . '</div>';
                  echo '<div class="forum-date">' . $date->format("F j, Y") . '</div>';
                  echo '</div>';
                  echo '<div class="forum-preview">' . $row["replyText"] . '</div>';
                  echo '</div>';
              }
            
            
          } else {
              include 'load_posts.php';
          }


        ?>
        
    </body>
</html>

<?php
    include('new_forum_post.php');
    include('../footer.php');
?>
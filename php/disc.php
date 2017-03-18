<?php
    
    $thisPage="Discussion Board";
    include('header.php');
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="stylesheets/screen.css">
        <link rel="stylesheet" type="text/css" href="stylesheets/discussion-board.css">
        <title>Discussion Board</title>
        
    </head>
    <body>
        
        Content for discussion board page!
      
        <?php
          include 'connect.php';

          $sql = "SELECT discussionID, discussionTitle, discussionText, postDate FROM discussion_board_posts";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  $date = new DateTime($row['postDate']);
                
                  $replySql = "SELECT discussionID, replyText, replyDate 
                    FROM discussion_board_replies
                    WHERE discussionID = " . $row["discussionID"];
                  $replies = $conn->query($replySql);
                
                  echo '<div class="forum-post-group">';
                  echo '<div class="forum-title-group">';
                  echo '<div class="forum-title">' . $row["discussionTitle"] . '</div>';
                  echo '<div class="forum-date">' . $date->format("F j, Y") . '</div>';
                  echo '</div>';
                  echo '<div class="forum-preview">' . $row["discussionText"] . '</div>';
                  echo '<div class="forum-replies">' . $replies->num_rows . ' Replies' . '</div>';
                  echo '</div>';
              }
          } else {
              echo "0 results";
          }
          $conn->close();
        ?>
        
    </body>
</html>

<?php
    include('new_forum_post.php');
    include('footer.php');
?>
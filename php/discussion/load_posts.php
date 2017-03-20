<?php
//new_forum_post.php
include '../connect.php';
 
$sql = "SELECT discussionID, discussionTitle, discussionText, postDate FROM discussion_board_posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $date = new DateTime($row['postDate']);
        $id = $row["discussionID"];

        $replySql = "SELECT discussionID, replyText, replyDate 
          FROM discussion_board_replies
          WHERE discussionID = " . $id;
        $replies = $conn->query($replySql);

        echo '<div class="forum-post-group">';
        echo '<div class="forum-title-group">';
        echo '<a href="?disc=' . $id . ' " class="forum-title">' . $row["discussionTitle"] . '</a>';
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
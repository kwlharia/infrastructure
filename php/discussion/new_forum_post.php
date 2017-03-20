<?php
//new_forum_post.php
include '../connect.php';
 
if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    //the form hasn't been posted yet, display it
    echo '<form method="post" action="">
            Title: <input type="text" name="forum_title" />
            Text: <textarea name="forum_text" /></textarea>
            <input type="submit" value="Post" />
         </form>';
}
else
{
    //the form has been posted, so save it
    $date = new DateTime();
    echo '<div>Do something</div>';
    echo '<div>' . $date->format("Y-m-d") . '</div>';
    echo '<div>' . $_POST['forum_title'] . '</div>';
    $sql = "INSERT INTO discussion_board(discussionTitle, discussionText, postDate)
       VALUES('" . $_POST['forum_title'] . "', '" .
             $_POST['forum_text'] . "', '" . 
            $date->format("Y-m-d") . "')";
    $result = $conn->query($sql);
    if(!$result)
    {
        //something went wrong, display the error
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    else
    {
        echo 'New post successfully added.';
    }
    $conn->close();
}
?>
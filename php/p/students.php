<?php

$thisPage="Students";
$displayClass = true;
$showNav = true;
$className = "MON | 01:20pm-03:20pm"; //will be programmatically worked in
include('header.php');

?>

<html>

    <body>
        <h1>Students in <?php echo $className; ?>:</h1>
        <?php
        //query
        $allStudents = $link->query("SELECT * FROM User");
        
        //number of users
        if($allStudents->num_rows != 0) {
            //turn it into an array
            while ($rows=$allStudents->fetch_assoc()) {
                $fname = $rows['firstName'];
                $lname = $rows['lastName'];
                $email = $rows['primaryEmail'];
                $uid = $rows['ID'];
                
                echo "<p>Name: $fname $lname <br>ID: $uid<br>Email: <a href='mailto:$email'>$email</a></p>";
            }
        } else {
            echo "No results.";
        }
        
        ?>
    
    </body>
</html>

<?php
include('footer.php');
?>
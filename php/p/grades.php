<?php

$thisPage="Grades";
$displayClass = true;
$showNav = true;
$className = "MON | 01:20pm-03:20pm"; //will be programmatically worked in
include('header.php');

$fillerText = "Integer aliquam ornare augue, vitae placerat sem tristique eu. Maecenas molestie ut mi non rhoncus. Aliquam erat volutpat. Nullam dignissim turpis velit, eget consequat metus semper sed. Duis est risus, vulputate non tristique eu, eleifend sit amet ex. Curabitur dictum lectus nec egestas commodo. Nam eu aliquet magna. Morbi eleifend non dolor sit amet ullamcorper.";

?>

<html>

    <body>
        <h1>Grades for <?php echo $className; ?>:</h1>
        
        <center>
        
        <?php
        $assignments = $link->query("SELECT * FROM Assignment");
        
        
        
        if($assignments->num_rows != 0) {
            //turn it into an array
            while ($rows=$assignments->fetch_assoc()) {
                $aID = $rows['assignmentID'];
                $aTitle = $rows['assignmentTitle'];
                $dueDate = $rows['dueDate'];
                
                echo "<div class='prev-update'>
                <h2>$aTitle</h2>
                Due Date: $dueDate<br>
                Assignment ID: $aID<br>
                Description: $fillerText
                
                </div>";
            }
        } else {
            echo "No results.";
        }
        
        ?>
        </center>
    
    </body>
</html>

<?php
include('footer.php');
?>
<?php
    
    $thisPage="Assignments";
    include('header.php');

    $assnTitle = "Assignment Title";
    $date = "03/06/2017";
    $assnDesc = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br><Br>
    
    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
    
    <br>
    <p class='dload'><a href='#'><img src='img/dload.png'>Document_File_32364.docx</a></p>
    <p class='dload'><a href='#'><img src='img/excel.png'>Excel_File_48283.xlsx</a></p>
    <p class='dload'><a href='#'><img src='img/html.png'>Homework_File_12345.html</a></p>
    <p class='dload'><a href='#'><img src='img/video.png'>Video_File_85684.mov</a></p>
    ";

    $oldAssnDesc = "Integer aliquam ornare augue, vitae placerat sem tristique eu. Maecenas molestie ut mi non rhoncus. Aliquam erat volutpat. Nullam dignissim turpis velit, eget consequat metus semper sed. Duis est risus, vulputate non tristique eu, eleifend sit amet ex. Curabitur dictum lectus nec egestas commodo. Nam eu aliquet magna. Morbi eleifend non dolor sit amet ullamcorper. 
    
    <br><Br>Aenean porta dui quis neque posuere malesuada. Integer imperdiet velit ut maximus porttitor. Cras id dictum eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque feugiat ante et neque rhoncus porta. Duis eu diam mi. Suspendisse vehicula enim at dolor rutrum luctus. 
    
    <br>
    <p class='dload'><a href='#'><img src='img/dload.png'>Document_File_32364.docx</a></p><p class='dload'><a href='#'><img src='img/excel.png'>Excel_File_48283.xlsx</a></p>
    <p class='dload'><a href='#'><img src='img/html.png'>Homework_File_12345.html</a></p>
    <p class='dload'><a href='#'><img src='img/video.png'>YouTube Link</a></p> <br><br><hr>";

    $update = "<h2>" . $assnTitle . "</h2>" . $date . "<br>" . $assnDesc;

    $oldupdate = "<h2>" . $assnTitle . "</h2>" . $date . "<br>" . $oldAssnDesc;
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="stylesheets/screen.css">
        <title>Assignments</title>
        
    </head>
    <body>
        
        <div class="main-container">
        
            <center>
                
                <div class="all-updates">
                
                <!-- current announcement -->
                <div class="current-update">
                    
                    <?php 
                    echo $update;
                    ?>
                
                    
                </div>
                
                
                
                <!-- contains older announcements -->
                <div class="prev-update">
                    <div class="update">
                    <?php 
                    echo $oldupdate;
                    ?>
                    </div>
                    
                    <div class="update">
                    <?php 
                    echo $oldupdate;
                    ?>
                        
                    </div> 
              
                </div>
            </div>
        
        </center>
        
        </div>
        
    </body>
</html>

<?php
    include('footer.php');
?>
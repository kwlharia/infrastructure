<?php

//logic for login

$belowRoot = true;
$isLoggedIn = true;
$isTeacher = true;
$isStudent = false;
$displayClass=true; //display the class name after the prof selects section from dropdown
$showNav = true; //don't display navigation if teacher hasn't selected class from drowpdown

$thisPage = "Announcements";

//for new posts
$date = "03/06/2017";
date_default_timezone_set("America/New_York");
$currentDate = date("m/d/Y") . " " . date("h:i:sa");

//for older and latest posts - will be programmatically added in

$oldAssnDesc = "Integer aliquam ornare augue, vitae placerat sem tristique eu. Maecenas molestie ut mi non rhoncus. Aliquam erat volutpat. Nullam dignissim turpis velit, eget consequat metus semper sed. Duis est risus, vulputate non tristique eu, eleifend sit amet ex. Curabitur dictum lectus nec egestas commodo. Nam eu aliquet magna. Morbi eleifend non dolor sit amet ullamcorper.";

$assnTitle = "Assignment Title";
$assnDesc = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    
    <br>
    <p class='dload'><a href='#'><img src='../assets/img/download.png'>Document_File_32364.docx</a></p>
    <p class='dload'><a href='#'><img src='../assets/img/excel.png'>Excel_File_48283.xlsx</a></p>
    <p class='dload'><a href='#'><img src='../assets/img/html.png'>Homework_File_12345.html</a></p>
    <p class='dload'><a href='#'><img src='../assets/img/video.png'>Video_File_85684.mov</a></p>
    ";

//for latest post - will be programmatically added in
$update = "<h2>" . $assnTitle . "</h2>" . $date . "<br>" . $assnDesc;

$oldupdate = "<h2>" . $assnTitle . "</h2>" . $date . "<br>" . $oldAssnDesc;


include('../header.php');
?>

<html>
<body>

<div class="main-container">
<center>
    <div class="all-updates">
        <!-- ADD A NEW ASSIGNMENT -->
            <div class="prev-update"><h1 id="add-h1">Add a new Announcement</h1>
                <div class="add-new-update">
                    <form id="add-new-assn">
                        
                    <input type="text" placeholder="Title of Announcement"><br>
                    Posting Date: <?php echo $currentDate; ?>

                        <br>
                        <textarea id="textarea" method="post" type="submit" name="announcementMsg" placeholder="Description and Instructions for announcement"></textarea>
                        <br>

                        <div class="dload">

                            <!--Programmatically add files -->
                            <input type="checkbox" name="file" value="file">
                            <img src="../assets/img/download.png">File.file<br></div>

                    </form>
                        
                        <button>Attach files</button>
                        <button>Delete files</button>
                        <button>Save Draft</button>
                        <button>Submit</button>
                        
                    
                    
                    </div>
                    
                    </div> 

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
        
        <script>
            //toggle announcement module
            $(document).ready(function(){
                $(".add-new-update").hide();
                
                $("#add-h1").click(function() {
                    $(".add-new-update").slideToggle("fast");
                });
            });
            
            //logic to submit announcement
            
            <?php 
            
            $sql = "INSERT INTO `Announcements` (`announcementID`, `roleID`, `message`, `announcementTitle`, `ID`) VALUES (\'823\', \'342\', \'dsfgfdfsa\', \'hii\', \'sfsw\')";
            
            ?>
        
        </script> 
    
</body>


</html>

<?php
include('../footer.php');
?>
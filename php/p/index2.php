<?php
    $thisPage="Home";
    include('header.php');

    //programmatically get info about the section
    $sectionDay = "MON";
    $sectionTime ="01:20pm-03:20pm";
    $sectionTitle= $sectionDay . " | " . $sectionTime;

    $fillerText = "<!-- this will NOT be hard coded -->
    
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        
                        <br> ";

?>

<html>
    <body>
        
        <div class="main-container">
        <h1>My CIS 101 Classes</h1>
            
<!--            <div class="my-classes">
                <h2 class="class-section" id="sect-a">
                <?php //echo $sectionTitle; ?></h2>
                
                
                <div class="class-content" id="content-a">
                <br>
                <div class = "box" id="ann-box">
                    <h2>announcement</h2>
                    <h3 id="main-ann">Title of Update</h3>
                    <p id="main-ann-date">03/06/2017</p>
                    
                    <p id="main-ann-desc"> <?php //echo $fillerText; ?> </p>
                    <a href='ann.php'>View More...</a>
                    
                    
                </div>
                
                <div class = "box" id="assn-box">
                    <h2>assignment</h2>
                    <h3 id="main-assn">Title of Update</h3>
                    <p id="main-assn-date">03/06/2017</p>
                    
                    <p id="main-assn-desc"> <?php //echo $fillerText; ?></p>
                    <a href='assn.php'>View More...</a>
                    
                </div>
                
                <div class = "box" id="grades-box">
                    <h2>Grades/Attendance</h2>
                    <h3 id="main-grades">Title of Update</h3>
                    <p id="main-grades-date">03/06/2017</p>
                    
                    <p id="main-grades-desc"> <?php //echo $fillerText; ?></p>
                    <a href='grades.php'>View More...</a>
                    
                    
                </div>
                
                <div class = "box" id="material-box">
                    <h2>course material</h2>
                    <h3 id="main-mat">Title of Update</h3>
                    <p id="main-mat-date">03/06/2017</p>
                    
                    <p id="main-mat-desc"> <?php //echo $fillerText; ?></p>
                    <a href='material.php'>View More...</a>
                    
                </div>
                
                <div class = "box" id="disc-box">
                    <h2>discussion board</h2>
                    <h3  id="main-disc">Title of Update</h3>
                    <p id="main-disc-date">03/06/2017</p>
                    
                    <p id="main-disc-desc"> <?php //echo $fillerText; ?></p>
                    <a href='disc.php'>View More...</a>
                    
                </div>
                
                <div class = "box" id="group-box">
                    <h2>group project</h2>
                    <h3 id="main-group">Title of Update</h3>
                    <p id="main-group-date">03/06/2017</p>
                    
                    <p id="main-group-desc"> <?php //echo $fillerText; ?></p>
                        <a href='group.php'>View More...</a>
                    
                </div>

            </div>

        </div>
            
            <div class="my-classes">
                <h2 class="class-section" id="sect-b">WEDS | 06:10pm-08:10pm</h2>
                
                
                <div class="class-content" id="content-b">
                    <br>
                
                <div class = "box" id="ann-box">
                    <h2>announcement</h2>
                    <h3 id="main-ann">Title of Update</h3>
                    <p id="main-ann-date">03/06/2017</p>
                    
                    <p id="main-ann-desc"> <?php //echo $fillerText; ?> </p>
                    <a href='ann.php'>View More...</a>
                    
                    
                </div>
                
                <div class = "box" id="assn-box">
                    <h2>assignment</h2>
                    <h3 id="main-assn">Title of Update</h3>
                    <p id="main-assn-date">03/06/2017</p>
                    
                    <p id="main-assn-desc"> <?php //echo $fillerText; ?></p>
                    <a href='assn.php'>View More...</a>
                    
                </div>
                
                <div class = "box" id="grades-box">
                    <h2>Grades/Attendance</h2>
                    <h3 id="main-grades">Title of Update</h3>
                    <p id="main-grades-date">03/06/2017</p>
                    
                    <p id="main-grades-desc"> <?php //echo $fillerText; ?></p>
                    <a href='grades.php'>View More...</a>
                    
                    
                </div>
                
                <div class = "box" id="material-box">
                    <h2>course material</h2>
                    <h3 id="main-mat">Title of Update</h3>
                    <p id="main-mat-date">03/06/2017</p>
                    
                    <p id="main-mat-desc"> <?php //echo $fillerText; ?></p>
                    <a href='material.php'>View More...</a>
                    
                </div>
                
                <div class = "box" id="disc-box">
                    <h2>discussion board</h2>
                    <h3  id="main-disc">Title of Update</h3>
                    <p id="main-disc-date">03/06/2017</p>
                    
                    <p id="main-disc-desc"> <?php //echo $fillerText; ?></p>
                    <a href='disc.php'>View More...</a>
                    
                </div>
                
                <div class = "box" id="group-box">
                    <h2>group project</h2>
                    <h3 id="main-group">Title of Update</h3>
                    <p id="main-group-date">03/06/2017</p>
                    
                    <p id="main-group-desc"> <?php //echo $fillerText; ?></p>
                        <a href='group.php'>View More...</a>
                    
                </div>
            
        </div>
    </div>
        
             <div class="my-classes">
                <h2 class="class-section" id="sect-c">THURS | 07:55am-09:55am</h2>
                
                
                <div class="class-content" id="content-c">
                    <br>
                
                <div class = "box" id="ann-box">
                    <h2>announcement</h2>
                    <h3 id="main-ann">Title of Update</h3>
                    <p id="main-ann-date">03/06/2017</p>
                    
                    <p id="main-ann-desc"> <?php //echo $fillerText; ?> </p>
                    <a href='ann.php'>View More...</a>
                    
                    
                </div>
                
                <div class = "box" id="assn-box">
                    <h2>assignment</h2>
                    <h3 id="main-assn">Title of Update</h3>
                    <p id="main-assn-date">03/06/2017</p>
                    
                    <p id="main-assn-desc"> <?php //echo $fillerText; ?></p>
                    <a href='assn.php'>View More...</a>
                    
                </div>
                
                <div class = "box" id="grades-box">
                    <h2>Grades/Attendance</h2>
                    <h3 id="main-grades">Title of Update</h3>
                    <p id="main-grades-date">03/06/2017</p>
                    
                    <p id="main-grades-desc"> <?php //echo $fillerText; ?></p>
                    <a href='grades.php'>View More...</a>
                    
                    
                </div>
                
                <div class = "box" id="material-box">
                    <h2>course material</h2>
                    <h3 id="main-mat">Title of Update</h3>
                    <p id="main-mat-date">03/06/2017</p>
                    
                    <p id="main-mat-desc"> <?php //echo $fillerText; ?></p>
                    <a href='material.php'>View More...</a>
                    
                </div>
                
                <div class = "box" id="disc-box">
                    <h2>discussion board</h2>
                    <h3  id="main-disc">Title of Update</h3>
                    <p id="main-disc-date">03/06/2017</p>
                    
                    <p id="main-disc-desc"> <?php //echo $fillerText; ?></p>
                    <a href='disc.php'>View More...</a>
                    
                </div>
                
                <div class = "box" id="group-box">
                    <h2>group project</h2>
                    <h3 id="main-group">Title of Update</h3>
                    <p id="main-group-date">03/06/2017</p>
                    
                    <p id="main-group-desc"> <?php //echo $fillerText; ?></p>
                        <a href='group.php'>View More...</a>
                    
                </div>
            
        </div>
    </div> -->
        <script>
         
            /**
            //toggle class headings.
            
            //first section
        $(document).ready(function(){
            $( "#content-a" ).hide();
            $("#sect-a").click(function(){
            $("#content-a").slideToggle("slow");
            });
        });
            
        $(document).ready(function(){
            $( "#content-b" ).hide();
            $("#sect-b").click(function(){
            $("#content-b").slideToggle("slow");
            });
        });
            
        $(document).ready(function(){
            $( "#content-c" ).hide();
            $("#sect-c").click(function(){
            $("#content-c").slideToggle("slow");
            });
        });

        **/
        </script>
    
    </body>


</html>

<?php
    include('footer.php');
?>
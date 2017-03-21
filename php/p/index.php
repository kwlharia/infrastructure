<?php
    $thisPage="Home";
    $displayClass = false;
    $showNav = false;
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

            <div class="my-classes">
                
                <div class="styled-select">
                    <select class="the-select">
                        
                        <!-- programmatically add in classes -->
                        <optgroup label="CIS 101">
                            <option>SELECT CLASS</option>
                            
                            <!-- programmatically make a new directory/page for each class -->
                            <option value="class1.php">MON | 01:20pm-03:20pm</option>
                            <option>WEDS | 06:10pm-08:10pm</option>
                            <option>THURS | 07:55am-09:55am</option>
                        </optgroup>
                    </select>
                </div>
            
            </div>
            
        <script>
            
            //using options to navigate to the different pages
            $('.styled-select select').change(function(){
            window.location = $(this).val();
            });
            
         
        </script>
    
    </body>


</html>

<?php
    include('footer.php');
?>
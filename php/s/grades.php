<?php
    
    $thisPage="Grades";
    include('header.php');

    $annTitle = "Announcement Title";
    $date = "03/06/2017";
    $annDesc = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br><Br>
    
    Etiam vehicula ligula erat, sit amet congue metus molestie id. Nullam auctor enim eu massa congue dapibus. Sed lacus urna, vehicula sit amet convallis ut, vestibulum et mauris. In fringilla convallis urna id tempor. Nam erat sem, tincidunt nec lacinia eu, egestas ut lorem. Vivamus odio sem, imperdiet nec nulla sed, ultrices sollicitudin metus. Nunc pulvinar, nibh eget facilisis sollicitudin, dui diam auctor enim, ac hendrerit turpis erat id massa. Nulla facilisi. <br>";

    $update = "<h2>" . $annTitle . "</h2>" . $date . "<br>" . $annDesc;
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="stylesheets/screen.css">
        <title>Grades/Attendance</title>
        
    </head>
    <body>
        
        Content for grades page!
        
    </body>
</html>

<?php
    include('footer.php');
?>
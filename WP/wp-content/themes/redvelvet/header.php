<html>
<head>
  <title>DEV: Red Velvet</title>
  <link rel='stylesheet' href='<?php bloginfo("stylesheet_url"); ?>'>
</head>
<body>
<div id='header'>
  <h1>HEADER</h1>
  <?php  
    if ( is_user_logged_in() ) {
        $current_user = wp_get_current_user();
        echo('<div>Welcome, ' . $current_user->user_firstname . '!</div>');
        echo('<a href=' . wp_logout_url() . '>Log Out</a>');
    } else {
        echo('<div>You are not logged in</div>');
        echo('<a href=' . wp_login_url() . '>Log In</a>');
    }
  ?>
</div>

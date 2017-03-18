<?php
  //connect.php
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "Red-Velvet";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 

//$server = 'localhost';
//$username   = 'root';
//$password   = '';
//$database   = 'Red-Velvet';
// 
//if (!mysql_connect($server, $username,  $password))
//{
//    exit('Error: could not establish database connection');
//}
//if (!mysql_select_db($database))
//{
//    exit('Error: could not select the database');
//}
   
?>
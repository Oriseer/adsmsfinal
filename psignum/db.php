<?php
  // DB Credentials
    $servername = "localhost";
    $username = "khel";   //put your phpmyadmin username.(default is "root")
    $password = "Eimei";     //if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "phploginapp";

  // Attempt to connect to MySQL

   $conn = mysqli_connect($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }

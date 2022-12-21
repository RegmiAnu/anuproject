<?php
$server= "localhost";
$username= "root";
$password= "";
$dbname="travel";

$conn =mysqli_connect($server, $username, $password, $dbname);

    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
   
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
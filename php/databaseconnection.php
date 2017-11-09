<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "startsiden";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {

        include 'createDatabase.php';

    //die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";





?>
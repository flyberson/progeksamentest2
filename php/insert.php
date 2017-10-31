<?php

$servername = "localhost";
$username = "root";
$password = "yoyo";
$dbname = "startsiden";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$titledata ="'".$_GET["title"]."'";
$urldata="'".$_GET["url"]."'";
$kategoridata = "'".$_GET["kategori"]."'";


$sql = "INSERT INTO linklist (title, url, kategori,date)
VALUES ($titledata, $urldata, $kategoridata,CURRENT_DATE())";

//INSERT INTO `linklist` (`id`, `title`, `url`, `kategori`) VALUES (NULL, 'first', 'www.google.dk', 'search');

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
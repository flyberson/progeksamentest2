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

$array = array();
$count=0;
$sql = "SELECT * FROM linklist";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {

    $myObj->title=$row["title"];
    $myObj->url=$row["url"];
    $myObj->kategori=$row["kategori"];
    $myObj->date=$row["date"];
    $myJSON = json_encode($myObj);

    $array[$count]=$myJSON;  //"Title: ".$row["title"]."Kategori: ".$row["kategori"]."url: ".$row["url"]."date: ".$row["date"];
    $count++;

}


$rand = rand(0,count($array)-1);

echo $array[$rand];
//echo $array[1];




?>
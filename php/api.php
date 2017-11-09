<?php

include 'databaseconnection.php';
$array = array();
$count=0;
$sql = "SELECT * FROM linklist";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {

    $myObj->title=$row["title"];
    $myObj->url=$row["url"];
    $myObj->kategori=$row["kategori"];
    $myObj->date=$row["dato"];
    $myJSON = json_encode($myObj);

    $array[$count]=$myJSON;  //"Title: ".$row["title"]."Kategori: ".$row["kategori"]."url: ".$row["url"]."date: ".$row["date"];
    $count++;

}


$rand = rand(0,count($array)-1);

echo $array[$rand];
//echo $array[1];




?>
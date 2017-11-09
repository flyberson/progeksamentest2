<?php

include 'databaseconnection.php';


$titledata ="'".$_GET["title"]."'";
$urldata="'".$_GET["url"]."'";
$kategoridata = "'".$_GET["kategori"]."'";


$sql = "INSERT INTO linklist (title, url, kategori,dato)
VALUES ($titledata, $urldata, $kategoridata,CURRENT_DATE())";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    include 'createTable.php';
    if ( $conn->query($sql)==false){

    echo "Error: " . $sql . "<br>" . $conn->error;}
}
?>
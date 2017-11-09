<?php
$sql = "create table if not EXISTS linklist (title VARCHAR(30),url VARCHAR(30),kategori VARCHAR (30),dato DATE )";
$conn->query($sql);
$sql = "INSERT INTO linklist (title, url, kategori,dato)
VALUES ($titledata, $urldata, $kategoridata,CURRENT_DATE())";
$conn->query($sql);
header("Location:http://localhost:63342/progeksamentest2/php/startsiden.php");
exit;
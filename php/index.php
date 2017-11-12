<?php

session_start();
include 'requireLogin.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="javascript/js1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
<nav>
    <a href=php/admin.php>admin</a> |
    <a href="php/startsiden.php">startsiden</a> |
    <a href="index.html">index</a> |

</nav>

<form action="php/insert.php" method="get" id="form1">
    <p>Title</p>
    <input id="title" type="text" name="title">
    <p>url</p>
    <input id="url" type="text" name="url">
    <p>Kategori</p>
    <input id="Kategori" type="text" name="kategori">
    <p>Submit</p>
    <input type="submit">
    <?php include 'databaseconnection.php';?>
</form>
</body>
</html>
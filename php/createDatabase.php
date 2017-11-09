<?php
try{
    $conn = new mysqli($servername, $username, $password);
$sql = "Create Database if not Exists startsiden;";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully <br>";
    } else {
        echo "Database not created: " . $conn->error;
    }

    $conn->close();
    $conn = new mysqli($servername, $username, $password,$dbname);
}catch (mysqli_sql_exception $e){
    debug_print_backtrace();
}

<html>
<header><title>This is title</title>
    <link rel="stylesheet" href="../css/styles.css"></header>
<body>
<?php
$delete= $_GET["delete"];

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

$sql = "DELETE FROM linklist WHERE id=".$delete;
$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
<form action="admin.php">
    <input type="submit" value="return" />
</form>



</body>
</html>
